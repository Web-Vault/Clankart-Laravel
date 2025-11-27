@extends('master')

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>make payment for your future</title>

        <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon-ck.jpg" type="image/x-icon">
        <link rel="stylesheet" href="{{URL::to('/')}}/view_css/purchase_form.css">

        <style>

        </style>

</head>

<body>

        @section('main-content')


                <div class="container form-container">
                        <h2 class="form-title">Checkout</h2>

                        <!-- Coupon Code Section -->
                        <div class="form-group">
                                <label for="coupon_code">Select Coupon Code (if applicable)</label>

                                <!-- Dropdown to select valid coupons -->
                                @if($valid_coupons->count() > 0)
                                        <select id="coupon_code" name="coupon_code" class="form-control" onchange="applyCoupon(this)">
                                                <option value="">Select a coupon</option>
                                                @foreach($valid_coupons as $coupon)
                                                        <option value="{{ $coupon->discount_value }}" data-coupon-id="{{ $coupon->id }}">
                                                                {{ $coupon->coupon_code }} - Discount: ₹{{ $coupon->discount_value }}
                                                        </option>
                                                @endforeach
                                        </select>
                                        <small class="pricing-help">Select a coupon to apply a discount to your total amount.</small>
                                @else
                                        <p class="help-text">No coupons available for this purchase amount.</p>
                                @endif
                        </div>

                        <!-- Delivery Address Section -->
                        <div class="form-group">
                                <label for="address">Delivery Address</label>
                                <textarea id="address" class="form-control" rows="4" placeholder="Enter your delivery address"
                                        required></textarea>
                        </div>

                        <!-- Price Summary -->
                        <div class="price-summary my-3">
                                <div class="summary-title">ORDER SUMMARY</div>
                                <div class="summary-price">Total Price: ₹ <span id="initial_total">{{ $book_price }}</span>
                                </div>

                                @php
                                        $discount = 0;
                                        $finalPayable = $book_price;

                                        if (isset($_POST['coupon_code']) && !empty($_POST['coupon_code'])) {
                                                $discount = (float) $_POST['discount_value'];
                                                $finalPayable = $book_price - $discount;
                                        }
                                @endphp

                                @if ($discount > 0)
                                        <div class="summary-discount">Discount Applied: ₹ {{ $discount }}</div>
                                @endif
                                <div class="summary-total">Total Payable: ₹ <span id="final_total">{{ $finalPayable }}</span>
                                </div>
                        </div>


                        <form id="razorpay-form" method="POST" action="{{ url('/make_payment') }}">
                                @csrf

                                @php
                                        $customer = DB::table('customers')->where('email', session('email'))->first();
                                        $book_info = DB::table('books')->find($book_id);
                                    @endphp

                                <input type="hidden" id="razorpay-amount" name="amount" value="{{ $finalPayable ?? 1000 }}">
                                <input type="hidden" id="razorpay-bookname" name="bookname"
                                        value="{{ $book_info->book_title }}">
                                <input type="hidden" name="book_id" value="{{ $book_info->id }}">
                                <input type="hidden" id="razorpay-name" name="name"
                                        value="{{ $customer->firstname ?? 'Aryan' }}">
                                <input type="hidden" id="razorpay-mobile" name="mobile_number"
                                        value="{{ $customer->mobile_number ?? '8758499499' }}">
                                <input type="hidden" id="razorpay-email" name="email"
                                        value="{{ $customer->email ?? 'aryanlathigara@gmail.com' }}">

                                <button type="button" id="razorpay-button" class="post-ad-button">MAKE FINAL PAYMENT</button>
                        </form>

                        <!-- Razorpay Script -->
                        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

                        <script>
                                document.getElementById('razorpay-button').onclick = function (e) {
                                        e.preventDefault();

                                        const amount = document.getElementById('razorpay-amount').value * 100;
                                        const options = {
                                                "key": "rzp_test_GDMFMRAC3bnneR",
                                                "amount": amount,
                                                "currency": "INR",
                                                "name": "Book Payment",
                                                "description": "Payment for " + document.getElementById('razorpay-bookname').value,
                                                "image": "https://cybercollege.info/wp-content/uploads/2021/06/cropped-logo.png",
                                                "handler": function (response) {
                                                        alert("Payment Successful! Payment ID: " + response.razorpay_payment_id);

                                                        const form = document.getElementById('razorpay-form');

                                                        // Add payment ID safely
                                                        let input = document.createElement('input');
                                                        input.type = 'hidden';
                                                        input.name = 'razorpay_payment_id';
                                                        input.value = response.razorpay_payment_id;
                                                        form.appendChild(input);

                                                        // ✅ Make sure CSRF token is in form
                                                        if (!form.querySelector('input[name=_token]')) {
                                                                let csrf = document.createElement('input');
                                                                csrf.type = 'hidden';
                                                                csrf.name = '_token';
                                                                csrf.value = '{{ csrf_token() }}';
                                                                form.appendChild(csrf);
                                                        }

                                                        // ✅ Submit the form to Laravel
                                                        console.log("Submitting form...");
                                                        form.submit();
                                                },
                                                "prefill": {
                                                        "name": document.getElementById('razorpay-name').value,
                                                        "email": document.getElementById('razorpay-email').value,
                                                        "contact": document.getElementById('razorpay-mobile').value,
                                                },
                                                "theme": {
                                                        "color": "#F37254"
                                                }
                                        };

                                        const rzp = new Razorpay(options);
                                        rzp.open();
                                };
                        </script>



                        <div class="secure-payment pt-3">
                                <p class="mb-2">Secure Payment: Your money is safe with us until you receive the item.</p>
                        </div>
                </div>

                <!-- JavaScript for Dynamic Discount Application -->
                <script>
                        function applyCoupon(select) {
                                const discount = parseFloat(select.value) || 0;
                                const initialTotal = parseFloat(document.getElementById('initial_total').innerText);
                                const finalTotal = initialTotal - discount;

                                // Update final total and display discount
                                document.getElementById('final_total').innerText = finalTotal > 0 ? finalTotal : 0;
                                document.getElementById('final_payable').value = finalTotal > 0 ? finalTotal : 0;
                                document.getElementById('selected_coupon_id').value = select.options[select.selectedIndex].getAttribute('data-coupon-id');
                        }
                </script>


        @endsection

</body>

</html>