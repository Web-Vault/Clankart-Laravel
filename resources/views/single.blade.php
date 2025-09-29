@extends('master')

@php
    use App\Models\customer;
    use App\Models\category;
@endphp
                            


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart | ClanKart</title>

    <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon-ck.jpg" type="image/x-icon">

    <link rel="stylesheet" href="{{URL::to('/')}}/view_css/single.css">

    <style>
        /* review */

        .reviews-section {
            display: block;
            max-width: ;
            margin: 40px auto;
            background-color: #ffffff;
            border-radius: 8px;
            padding: 40px;
            /* box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); */
        }

        .section-title {
            font-size: 28px;
            font-weight: bold;
            color: #333;
            text-align: center;
            margin-bottom: 30px;
            position: relative;
        }

        .section-title::after {
            content: "";
            width: 100px;
            height: 3px;
            background-color: #4a90e2;
            display: block;
            margin: 8px auto 0;
            border-radius: 2px;
        }

        .review-card {
            width: 100%;
            background-color: #f8f9fc;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 25px;
            margin-bottom: 20px;
        }

        .review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
        }

        .reviewer-name {
            font-size: 20px;
            font-weight: bold;
            color: #333;
        }

        .rating {
            display: flex;
            gap: 4px;
        }

        .star {
            font-size: 20px;
            color: #e0e0e0;
        }

        .star.filled {
            color: #f4c542;
        }

        .review-date {
            font-size: 14px;
            color: #888;
            margin-top: 4px;
            font-style: italic;
        }

        .review-text {
            font-size: 16px;
            color: #555;
            line-height: 1.6;
            margin-top: 12px;
            padding: 15px 20px;
            background-color: #ffffff;
            border-radius: 8px;
            border-left: 4px solid #4a90e2;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
    </style>

</head>

<body>

    @section('main-content')

    @if (isset($single))
        <div class="container">
            <div class="product-img">
                <div class="image-section">
                    <img src="{{URL::to('/')}}{{$single->book_image}}" alt="Not available">
                </div>
                <!-- <div class="image-thumbnails rounded-1">
                                                        <img src="{{URL::to('/')}}/images/clankart-logo.png" alt="Thumbnail 2">
                                                        <img src="{{URL::to('/')}}/images/clankart-logo.png" alt="Thumbnail 3">
                                                        <img src="{{URL::to('/')}}/images/clankart-logo.png" alt="Thumbnail 4">
                                                        <img src="{{URL::to('/')}}/images/clankart-logo.png" alt="Thumbnail 1">
                                              </div> -->
            </div>
            <div class="content">
                <h1>{{$single->book_title}}</h1>
                <div class="price">
                    ₹{{$single->price}} <span class="old-price">₹{{$single->price + 200}}</span>
                </div>
                <div class="availability">Shipping is available from the @if ($single->seller_name == "Admin")
                    Admin
                @else
                    {{$single->seller_name}}
                @endif
                    !
                </div>
                <div class="info">
                    @if(session()->has('customer_email'))
                        <p>Logged in as: {{ session('customer_email') }}</p>
                    @else
                        no session
                    @endif


                    @php
                        $categories = category::find($single->category);
                        $cgty_name = $categories->category_name;
                    @endphp

                    <p><label>Book Condition:</label> <strong>{{$single->condition}}</strong></p>
                    <p><label>Subject/Title:</label> <strong>Chat with me if you are interested</strong></p>
                    <p><label>Type:</label> <strong>{{$single->type}}</strong></p>
                    <p><label>Category:</label> <strong>{{$cgty_name}}</strong></p>
                    <p><label>Author:</label> <strong>{{$single->author_name}}</strong></p>
                    <p><label>Year:</label> <strong>{{$single->year}}</strong></p>
                </div>

                @if (session()->has('customer_email'))
                
                @if ($single->stock != 0)

                    <div class="chat-button">
                        <a href="/checkout/{{$single->id}}/{{$single->price}}">Buy Now</a>
                        <a href="{{ route('add-to-wishlist', ['id' => $single->id]) }}">Add to wishlist</a>
                        <a href="{{ route('add-to-cart', ['id' => $single->id]) }}">Add to cart</a>
                    </div>

                @else
                    <h3 class="text-danger">OUT OF STOCK</h3>
                @endif
                    
                @else
                    <h4 class="text-danger"> <a href="{{ route('login') }}"> Login first </a></h4>
                @endif

            </div>
        </div>

        <div class="reviews-section container border my-5 p-5">
            <h2 class="section-title">Customer Reviews</h2>

            @if (isset($reviews) && count($reviews) > 0)
                <div class="reviews-list">
                    @foreach($reviews as $review)
                        <div class="review-card">
                            <div class="review-header">

                            @php
                                $customer_name = customer::find($review->customer_id);
                                $name = $customer_name->firstname." ".$customer_name->lastname;
                            @endphp

                                <h4 class="reviewer-name">{{ $name }}</h4>
                                <div class="rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <span class="star {{ $i <= $review->rating_value ? 'filled' : '' }}">★</span>
                                    @endfor
                                </div>
                            </div>
                            <p class="review-date">{{ $review->created_at->format('F j, Y') }}</p>
                            <p class="review-text">{{ $review->review_text }}</p>
                        </div>
                    @endforeach
                </div>
            @else
                <p class="no-reviews">No reviews available</p>
            @endif
        </div>



        <div class="description-container container border my-5">
            <div class="description">
                <div class="left">
                    <h2>Description</h2>
                    <p>{{$single->description}}</p>
                    <div class="community">
                        <a href="#">Our Community</a>
                        <p>We're not just another shopping website where you buy from professional sellers - we are a
                            vibrant community of students, book lovers across India who deliver happiness to each other!</p>
                    </div>
                    <div class="ad-info">
                        <span>Posted On: {{ $single->created_at }}</span>
                    </div>
                </div>
                <div class="right">
                    <h2>Sold By</h2>
                    <div class="seller-info">
                        <img src="{{URL::to('/')}}/images/clankart-logo.png" alt="Seller">
                        <div>
                            <strong>{{$single->seller_name}}</strong><span class="verified">✔ Verified</span>
                            <p>{{$single->Address}}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    @endif


    @endsection
</body>

</html>