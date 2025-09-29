@extends('master')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Categories | ClanKart</title>

    <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon-ck.jpg" type="image/x-icon">


    <link rel="stylesheet" href="{{URL::to('/')}}/view_css/books.css">

</head>

<body>

    @section('main-content')

        <div class="container mt-5 product-heading fs-1">Buy Old books</div>
        <div class="container product-row">


            @if(isset($all_books))
                @foreach($all_books as $book)
                    <div class="product position-relative">
                        <img src="{{URL::to('/')}}{{$book->book_image}}" alt="">
                        @if((int)($book->stock ?? 0) <= 0)
                            <span class="badge bg-danger position-absolute" style="top:10px; left:10px;">Sold Out</span>
                        @endif
                        <div class="desc">
                            <label for="" class="name">{{$book->book_title}}</label><br>
                            <label for="" class="price">₹{{$book->price}}</label><br>
                            <small class="text-muted">Stock: {{ (int)($book->stock ?? 0) }}</small>
                        </div>
                        <div class="purchase">
                            @if((int)($book->stock ?? 0) <= 0)
                                <a class="buy disabled" aria-disabled="true" style="pointer-events:none; opacity:0.6;">Sold Out</a>
                            @else
                                <a href="click/{{$book->id}}" class="buy">Purchase Item</a>
                            @endif
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

    @endsection
</body>

</html>