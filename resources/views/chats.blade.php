@extends('master')

@php

        use App\Models\customer;

@endphp

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Chats | ClanKart</title>

        <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon-ck.jpg" type="image/x-icon">

        <link rel="stylesheet" href="{{URL::to('/')}}/view_css/chats.css">

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
                                                                <svg height="25" viewBox="0 0 32 32"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <title></title>
                                                                        <g id="about">
                                                                                <path
                                                                                        d="M16,16A7,7,0,1,0,9,9,7,7,0,0,0,16,16ZM16,4a5,5,0,1,1-5,5A5,5,0,0,1,16,4Z">
                                                                                </path>
                                                                                <path
                                                                                        d="M17,18H15A11,11,0,0,0,4,29a1,1,0,0,0,1,1H27a1,1,0,0,0,1-1A11,11,0,0,0,17,18ZM6.06,28A9,9,0,0,1,15,20h2a9,9,0,0,1,8.94,8Z">
                                                                                </path>
                                                                        </g>
                                                                </svg>
                                                        </div>
                                                        <div class="nav-name  w-100 d-flex align-items-center">
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
                                                                <img src="{{URL::to('/')}}/images/selling orders.png"
                                                                        alt="">
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
                                                        <div class="nav-name  w-100 align-items-center">
                                                                <span class="mx-3 fs-5"> My Wishlist </span>
                                                        </div>

                                                </div>
                                        </a>


                                </div>
                        </div>
                        <!-- 
                        <div class="col-9">
                                <div class="cart-inner container w-auto d-flex flex-column">
                                        <img src="{{URL::to('/')}}/images/no-chats.png" alt="Empty" class="img m-auto">
                                        <p class="p-3 fs-4 m-auto">You have no chats :(</p>
                                </div>
                        </div>

 -->


                        <div class="col-9 border">
                                <div class="messenger_list">
                                        @foreach ($partners as $person)


                                                <a href="{{ route('message_with_person', $person['other_user']) }}" class="text-dark text-decoration-none">
                                                        <div class="container person border d-flex my-2 p-2">
                                                                <div class="profile" style="width: 15%; margin-right: 10px;">
                                                                        <img src="{{ asset('upload/' . ($person['other_user']->profile_picture ?? 'default-avatar.png')) }}" class="img border" style="width: 60%; border-radius: 60%;" alt="Profile">
                                                                </div>
                                                                <div class="seller_info d-flex align-items-left flex-column justify-content-center">
                                                                        <h4 class="name">{{ $person['other_user']->firstname }} </h4>
                                                                        <small class="last Message">I am interested in purchasing the book...</small>
                                                                </div>
                                                        </div>
                                                </a>
                                                
                                        @endforeach
                                </div>
                        </div>




                        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



                </div>

        </div>

        @endsection

</body>

</body>

</html>