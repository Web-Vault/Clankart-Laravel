@extends('master')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>master view</title>

    <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon-ck.jpg" type="image/x-icon">

    <title>{{ $search }}</title>

    <link rel="stylesheet" href="{{URL::to('/')}}/view_css/search_result.css">
</head>

<body>

    @section('main-content')
    <div class="container" style="margin-top: 0; margin-bottom: 5%;">
        <div class="row">
            <div class="col-md-12">
                <h2 class="my-4">
                    Search Results for: {{ $search }}
                </h2>
            </div>
        </div>

        <div class="container product-row">
            @if($results->isEmpty() || $results == "")
                <p>No books found matching your search query.</p>
            @else
                @foreach($results as $book)
                    <div class="product"> <img src="{{URL::to('/')}}/{{$book->book_image}}" alt="">
                        <div class="desc">
                            <label for="" class="name">{{$book->book_title}}</label><br>
                            <label for="" class="description">Desc : {{$book->description}}</label>
                            <label for="" class="seller">Seller : {{$book->seller_name}}</label><br>
                            <label for="" class="price">₹{{$book->price}}</label><br>
                        </div>
                        <div class="purchase"><a href="click" class="buy">Purchase Item</a></div>
                    </div>
                @endforeach
            @endif
        </div>


    </div>
    @endsection

</body>

</html>