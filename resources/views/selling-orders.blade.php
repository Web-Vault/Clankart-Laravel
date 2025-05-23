@extends('master')

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>My Orders | ClanKart</title>

          <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon-ck.jpg" type="image/x-icon">

          <link rel="stylesheet" href="{{URL::to('/')}}/view_css/selling_orders.css">

</head>

<body>

          @section('main-content')

          <div class="cart-container container rounded border my-5 mx-auto  cart-main">

                    <div class="row">
                              <div class="col-3">
                                        <div class="nav mt-3">

                                                  <a href="{{URL::to('/')}}/profile" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">

                                                                      <div class="nav-icon">
                                                                                <svg height="25" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                                                          <title></title>
                                                                                          <g id="about">
                                                                                                    <path d="M16,16A7,7,0,1,0,9,9,7,7,0,0,0,16,16ZM16,4a5,5,0,1,1-5,5A5,5,0,0,1,16,4Z"></path>
                                                                                                    <path d="M17,18H15A11,11,0,0,0,4,29a1,1,0,0,0,1,1H27a1,1,0,0,0,1-1A11,11,0,0,0,17,18ZM6.06,28A9,9,0,0,1,15,20h2a9,9,0,0,1,8.94,8Z"></path>
                                                                                          </g>
                                                                                </svg>
                                                                      </div>
                                                                      <div class="nav-name  w-100 align-items-center">
                                                                                <span class="mx-3 fs-5"> My Profile </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                                  <a href="{{URL::to('/')}}/ads" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">

                                                                      <div class="nav-icon">
                                                                                <img src="{{URL::to('/')}}/images/ads.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Ads </span>
                                                                      </div>

                                                            </div>
                                                  </a>

                                                  <a href="{{URL::to('/')}}/orders" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">

                                                                      <div class="nav-icon">
                                                                                <img src="{{URL::to('/')}}/images/orders.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Orders </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                                  <a href="{{URL::to('/')}}/selling-orders" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">
                                                                      <div class="nav-icon">
                                                                                <img src="{{URL::to('/')}}/images/selling orders.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Selling Orders </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                                  <a href="{{URL::to('/')}}/chats" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">
                                                                      <div class="nav-icon">
                                                                                <img src="{{URL::to('/')}}/images/chats.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100 align-items-center">
                                                                                <span class="mx-3 fs-5"> My Chats </span>
                                                                      </div>

                                                            </div>
                                                  </a>



                                                  <a href="{{URL::to('/')}}/wishlist" class="links">
                                                            <div class="nav-item p-4 d-flex w-100">
                                                                      <div class="nav-icon">
                                                                                <img src="{{URL::to('/')}}/images/wishlist.png" alt="">
                                                                      </div>
                                                                      <div class="nav-name  w-100  align-items-center">
                                                                                <span class="mx-3 fs-5"> My Wishlist </span>
                                                                      </div>

                                                            </div>
                                                  </a>


                                        </div>
                              </div>

                              <div class="col-9">
                                        <p class="p-3 fs-3 border-bottom">My Selling Orders (0) </p>



                                        <div class="cart-inner container w-auto d-flex flex-column">





                                                  <img src="{{URL::to('/')}}/images/storeclosed.png" alt="Empty" class=" img m-auto">
                                                  <p class="p-3 fs-4 m-auto">Sorry, you haven't listed any books for sale yet.</p>
                                                  <button class="btn btn-primary border-primary d-none mb-5 p-3 my-3 d-md-block border rounded-1 m-auto search-btn">Start Selling now!</button>




                                        </div>



                              </div>

                    </div>





          </div>

          @endsection

</body>

</body>

</html>