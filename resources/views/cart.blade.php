@extends('master')

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cart | ClanKart</title>

        <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon-ck.jpg" type="image/x-icon">

        <link rel="stylesheet" href="{{URL::to('/')}}/view_css/cart.css">
</head>

<body>

        @section('main-content')

        <div class="container rounded-1 border cart-container my-5 mx-auto">
                <p class="p-3 fs-3">My cart</p>
        </div>

        <div class="cart-container container rounded border my-5 mx-auto  cart-main">

                <!-- @yield('login-needed') -->

                <div class="cart-inner container w-auto my-3">
                        <div class="cart_item_list">
                                @php
                                        $totalPrice = 0;
                                        $shippingCharge = 300; // Assuming a fixed shipping charge per item
                                @endphp

                                @if ($cart_items->count() > 0)
                                        @foreach ($cart_items as $cart)
                                                @php
                                                        $totalPrice += $cart->book_price;
                                                @endphp
                                                
                                                <div class="inner-cart-container border-bottom rounded-0 w-100 py-5">
                                                        <div class="cart-item">
                                                                <div class="item-image">
                                                                        <img src="{{ URL::to('/') }}{{ $cart->book_image }}" alt="Physiology Book">
                                                                </div>
                                                                <div class="item-details">
                                                                        <div class="item-title">{{ $cart->book_name }}</div>
                                                                        <div class="item-seller">Seller: {{ $cart->seller_name }}</div>
                                                                        <div class="item-actions">
                                                                                <a href="add-to-wishlist/{{ $cart->book_id }}">MOVE TO WISHLIST</a>
                                                                                <a href="remove-cart/{{ $cart->book_id }}">REMOVE</a>
                                                                        </div>                                                                          
                                                                </div>                                                                          
                                                                <div class="price-details">
                                                                        <div class="price-label">PRICE DETAILS</div>
                                                                        <div class="price">Price: ₹ {{ $cart->book_price }}</div>
                                                                        <div class="shipping">Shipping Charges: ₹ {{ $shippingCharge }}</div>
                                                                        <div class="total">Total: ₹ {{ $cart->book_price + $shippingCharge }}</div>                                                                          
                                                                </div>
                                                        </div>
                                                </div>
                                        @endforeach
                                        
                                        @else
                                                <div class="cart-inner container w-auto d-flex flex-column">
                                                                <img src="{{ URL::to('/') }}/images/emptycart.png" alt="Empty" height="500"
                                                                                width="500" class="m-auto">
                                                                <p class="p-3 fs-4 m-auto">Sorry, you have an empty cart :(</p>
                                                                <button class="btn btn-primary border-primary d-none mb-5 p-3 my-3 d-md-block border rounded-1 m-auto search-btn">Start Buying Now!</button>
                                                </div>
                                        @endif
                        </div>

                        @if ($cart_items->count() > 0)
                                @php
                                        $totalShipping = $cart_items->count() * $shippingCharge;
                                        $totalPayable = $totalPrice + $totalShipping;
                                @endphp

                                <div class="total-price-details">
                                        <div class="price-summary my-3">
                                                <div class="summary-title">TOTAL PRICE DETAILS</div>
                                                <div class="summary-price">Price ({{ $cart_items->count() }} items): ₹ {{ $totalPrice }} </div>
                                                <div class="summary-shipping">Shipping Charges: ₹ {{ $totalShipping }}</div>
                                                <div class="summary-total">Total Payable: ₹ {{ $totalPayable }}</div>
                                        </div>
                                                <div class="secure-payment pt-3">
                                                        <p class="mb-2">Secure Payment: Your money is safe with us until you receive the item.</p>
                                                </div>
                                                <a href="{{URL::to('/')}}/place_order/{{ $cart->book_id }}/{{$totalPayable}}" class="checkout-button">ENTER DELIVERY ADDRESS</a>
                                </div>
                        @endif
                </div>
        </div>

        @endsection

</body>

</html>