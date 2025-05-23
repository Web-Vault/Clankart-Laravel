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
                <div class="content-wrapper d-flex gap-4">
                        <div class="book-info flex-shrink-0">
                                <img src="{{ URL::to('/') }}/{{ $book->book_image }}" alt="Book Image"
                                        class="book-image mb-3">
                                <h3 class="book-title">{{ $book->book_title }}</h3>
                                <p class="book-price">Price: ₹{{ $book->price }}</p>
                                <p class="book-description">{{ $book->description }}</p>
                        </div>

                        <div class="review-form-container">
                                <h3 class="form-title">Submit Your Review</h3>
                                <form action="{{ route('submit.review') }}" method="POST">
                                        @csrf
                                        <div class="rating-section mb-4">
                                                <label for="rating" class="rating-label">Rating:</label>
                                                <div class="star-rating">
                                                        @for ($i = 1; $i <= 5; $i++)
                                                                <input type="radio" id="star{{ $i }}" name="rating"
                                                                        value="{{ $i }}">
                                                                <label for="star{{ $i }}" class="star">&#9733;</label>
                                                        @endfor
                                                </div>
                                        </div>

                                        <input type="hidden" name="product_id" value="{{ $book->id }}">
                                        <input type="hidden" name="order_id" value="{{$oid}}">

                                        <div class="review-text-section mb-4">
                                                <label for="review_text" class="review-text-label">Your Review:</label>
                                                <textarea id="review_text" name="review_text" rows="4"
                                                        placeholder="Write your review here..." required></textarea>
                                        </div>

                                        <button type="submit" class="submit-btn">Submit Review</button>
                                </form>
                        </div>
                </div>
        </div>


        @endsection

</body>

</html>