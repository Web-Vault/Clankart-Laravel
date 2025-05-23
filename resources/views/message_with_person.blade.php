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


                                <form action="" method="POST" enctype="multipart/form-data" class="col chat-container">

                                        @csrf
                                        <div class="chat-container">

                                                <div class="chat-area">
                                                        @foreach ($messages as $msg)
                                                                <div class="message {{ $msg->sender_id === auth()->id() ? 'sent' : 'received' }}">
                                                                        {{ $msg->message }}
                                                                        @if ($msg->attachment)
                                                                                <a href="{{ asset('uploads/' . $msg->attachment) }}" target="_blank">View Attachment</a>
                                                                        @endif
                                                                </div>
                                                        @endforeach
                                                </div>

                                                <div class="message-input">
                                                        <input type="text" name="message"
                                                                placeholder="Type your message..." />
                                                        <input type="file" id="file-upload" name="attachment"
                                                                accept=".png, .jpg" style="display: none;" />
                                                        <label for="file-upload" style="cursor: pointer;">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                        height="20" fill="currentColor"
                                                                        class="bi bi-paperclip">
                                                                        <path
                                                                                d="M11.9 1.293a1 1 0 0 0-1.414 0l-8 8a1 1 0 1 0 1.414 1.414L11 3.414V9a1 1 0 1 0 2 0V2a1 1 0 0 0-1.9-.707z" />
                                                                        <path
                                                                                d="M6.5 0a3.5 3.5 0 0 1 3.5 3.5v9a3.5 3.5 0 1 1-2-3.215V3.5a1.5 1.5 0 0 0-1.5-1.5A1.5 1.5 0 0 0 5 3.5v5.085l-1 1V3.5A3.5 3.5 0 0 1 6.5 0z" />
                                                                </svg>
                                                        </label>
                                                        <button id="sendMessage">Send</button>
                                                </div>

                                        </div>
                                </form>



                        </div>



                        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



                </div>

        </div>

        @endsection

</body>

</body>

</html>