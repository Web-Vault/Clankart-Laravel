@extends('master')

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Ads | ClanKart</title>

        <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon-ck.jpg" type="image/x-icon">


        <link rel="stylesheet" href="{{URL::to('/')}}/view_css/ads.css">

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
                                                                <div class="nav-name  w-100  align-items-center">
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
                                        <div class="d-flex justify-content-between align-items-center p-3 border-bottom">
                                                <p class="fs-3 m-0">My Ads ({{ isset($my_books) ? $my_books->count() : 0 }})</p>
                                                <a href="{{ URL::to('/') }}/post-ad" class="btn btn-primary">Post New Ad</a>
                                        </div>


                                        <!-- <div class="cart-inner container w-auto d-flex flex-column">


                                                          <img src="{{URL::to('/')}}/images/storeclosed.png" alt="Empty"  class="img m-auto">
                                                          <p class="p-3 fs-4 m-auto">You have no books listed for sale :(</p>
                                                          <button class="btn btn-primary border-primary d-none mb-5 p-3 my-3 d-md-block border rounded-1 m-auto search-btn">Click Here To Sll Your Books For Actual Money!</button>



                                                </div> -->



                                        <div class="cart-inner container w-auto d-flex flex-column">
                                                <div class="main-content">
                                                        <div class="header">
                                                                <h1>Your Books Listed for Sale</h1>
                                                                <!-- <div class="profile-buttons">
                                                                                        <button class="view-profile">View your public profile</button>
                                                                                        <button class="share-profile">Share your profile</button>
                                                                              </div> -->
                                                        </div>
                                                        <div class="ads-container">


                                                                @if (isset($my_books))

                                                                        @foreach ($my_books as $book)

                                                                                <div class="ad-item border-bottom rounded-0">
                                                                                        <img src="{{URL::to('/')}}{{$book->book_image}}"
                                                                                                alt="Sample Book">

                                                                                        <div class="ad-details">
                                                                                                <h2 class="ad-title d-flex justify-content-between align-items-center">
                                                                                                        <span>{{$book->book_title}}</span>
                                                                                                        <span class="badge bg-primary">
                                                                                                                Orders: {{ isset($orderCounts[$book->id]) ? $orderCounts[$book->id] : 0 }}
                                                                                                        </span>
                                                                                                </h2>

                                                                                                <p class="ad-info">Posted:
                                                                                                        {{ $book->created_at }}<br>Quantity
                                                                                                        Available: {{$book->stock}}</p>

                                                                                                <form action="{{ route('books.update_stock', ['book_id' => $book->id]) }}" method="post" class="d-flex align-items-end gap-2 mt-2" style="max-width: 320px;">
                                                                                                        @csrf
                                                                                                        <div class="flex-grow-1">
                                                                                                                <label for="stock_{{ $book->id }}" class="form-label m-0">Update Stock</label>
                                                                                                                <input type="number" id="stock_{{ $book->id }}" name="stock" min="0" class="form-control" value="{{ (int)($book->stock ?? 0) }}">
                                                                                                        </div>
                                                                                                        <button type="submit" class="btn btn-outline-success">Save</button>
                                                                                                </form>
                                                                                                <div class="ad-actions d-flex gap-3 align-items-center flex-wrap">
                                                                                                        <a href="#"
                                                                                                                class="delete-link">Delete</a>
                                                                                                        <a href="#" class="share-link">Share</a>
                                                                                                        <a href="{{ route('selling_orders', ['book_id' => $book->id]) }}" class="view_order_btn btn btn-sm text-decoration-none btn-outline-primary">View Orders</a>
                                                                                                </div>

                                                                                                <p class="ad-earnings">You will earn
                                                                                                        ₹{{$book->price / 10}} for this ad</p>
                                                                                        </div>
                                                                                        <!-- <div class="ad-id">Ad ID: 1001721315778855</div> -->
                                                                                </div>
                                                                        @endforeach

                                                                @endif




                                                        </div>
                                                </div>

                                        </div>

                                </div>

                        </div>





                </div>

        @endsection

</body>

</body>

</html>