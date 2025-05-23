        @extends('master')

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Cart | ClanKart</title>

          <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon-ck.jpg" type="image/x-icon">

          <link rel="stylesheet" href="{{URL::to('/')}}/view_css/checkout.css">
</head>

<body>

          @section('main-content')

          <div class="container rounded-1 border cart-container my-5 mx-auto">
                    <p class="p-3 fs-3">Check Out - <small> Make the product yours.</small></p>
          </div>

          <div class="cart-container container rounded border my-5 mx-auto  cart-main">








                    <!-- @yield('login-needed') -->

                    <!-- <div class="cart-inner container w-auto d-flex flex-column">
                              <img src="{{URL::to('/')}}/images/emptycart.png" alt="Empty" height="500" width="500" class="m-auto">
                              <p class="p-3 fs-4 m-auto">Sorry you have an empty cart :(</p>
                              <button class="btn btn-primary border-primary d-none mb-5 p-3 my-3 d-md-block border rounded-1 m-auto search-btn">Start Buying Now!</button>
                    </div>
                     -->






                    <div class="cart-inner container w-auto my-3">

                    @if (isset($find_book))
                    
                    @endif
                    
                                                  <div class="inner-cart-container border-bottom rounded-0">
                                                            <div class="cart-item">
                                                                      <div class="item-image">
                                                                                <img src="{{URL::to('/')}}{{ $find_book->book_image }}" alt="Physiology Book">
                                                                      </div>
                                                                      <div class="item-details">
                                                                                <div class="item-title">{{$find_book->book_title}}</div>
                                                                                <div class="item-quantity">Qty: 1</div>
                                                                                <div class="item-seller">Seller: {{$find_book->seller_name}}</div>
                                                                      </div>
                                                                      
                                                            </div>
                                                  </div>
                                                  <div class="total-price-details">
                                                            <div class="price-summary my-3">
                                                                      <div class="summary-title">TOTAL PRICE DETAILS</div>
                                                                      <div class="summary-price">Price (1 item): ₹ {{$find_book->price}}</div>
                                                                      <div class="summary-shipping">Shipping Charges: ₹ 0</div>
                                                                      <div class="summary-total">Total Payable: ₹ {{$final = $find_book->price + 0 }}</div>
                                                            </div>
                                                            <div class="secure-payment pt-3">
                                                                      <p class="mb-2">Secure Payment: Your money is safe with us until you receive the item.</p>
                                                            </div>
                                                            <a href="{{URL::to('/')}}/place_order/{{$find_book->id}}/{{$final}}" class="checkout-button">ENTER DELIVERY ADDRESS</a>
                                                  </div>
                    

                    

                    </div>



          </div>

          @endsection

</body>

</html>