@extends('master')

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{URL::to('/')}}/view_css/review_form.css">
        <title>Review form | CLanKart</title>
</head>

<body>

        @section('main-content')

                <div class="review-page container my-5 p-4">
                        <div class="review-header d-flex justify-content-between align-items-center mb-3">
                                <div>
                                        <h1 class="h3 mb-1">Write a Review</h1>
                                        <p class="text-muted m-0">Share your experience with other readers</p>
                                </div>
                        </div>

                        <div class="content-wrapper d-flex gap-4">
                                <div class="book-info flex-shrink-0">
                                        <img src="{{ URL::to('/') }}{{ $book->book_image }}" alt="Book Image"
                                                class="book-image mb-3">
                                        <h3 class="book-title">{{ $book->book_title }}</h3>
                                        <p class="book-price">Price: ₹{{ $book->price }}</p>
                                        <p class="book-description">{{ $book->description }}</p>
                                </div>

                                <div class="review-form-container">
                                        <h3 class="form-title">Submit Your Review</h3>
                                        <p class="form-subtitle text-muted mb-3">Your feedback helps others decide</p>
                                        <form action="{{ route('submit.review') }}" method="POST">
                                                @csrf
                                                <div class="rating-section mb-4">
                                                        <label class="rating-label d-block mb-1">Rating</label>
                                                        <div class="star-rating" aria-label="Rating">
                                                                @for ($i = 5; $i >= 1; $i--)
                                                                        <input type="radio" id="star{{ $i }}" name="rating" value="{{ $i }}">
                                                                        <label for="star{{ $i }}" class="star" title="{{ $i }} star">&#9733;</label>
                                                                @endfor
                                                        </div>
                                                </div>

                                                <input type="hidden" name="product_id" value="{{ $book->id }}">
                                                <input type="hidden" name="order_id" value="{{$oid}}">

                                                <div class="review-text-section mb-4">
                                                        <textarea id="review_text" name="review_text" rows="4"
                                                                placeholder="Write your review here..." required></textarea>
                                                </div>

                                                <button type="submit" class="submit-btn">Submit Review</button>
                                        </form>
                        </div>
                </div>


        @endsection
</body>
</html>