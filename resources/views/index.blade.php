@extends('master')

<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Buy and sell old books online</title>

          <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon-ck.jpg" type="image/x-icon">

          <link rel="stylesheet" href="{{URL::to('/')}}/view_css/index.css">

</head>

<body>
          @section('main-content')

          <div class="hero">
                    <div class="hero-part d-flex align-items-center justify-content-center">
                              <div class="position-relative d-flex justify-content-center big-buysell-buttons">
                                        <div class="big-buy-button rounded border mx-2">
                                                  <a href="/books" class="d-flex rounded flex-column justify-content-center align-items-center p-3">
                                                            <img src="images/hand-books.svg" alt="Buy Used Books" class="icon">
                                                            <button class="btn-text">Buy Used Books</button>
                                                  </a>
                                        </div>

                                        <div class="big-or-button d-flex flex-center border rounded-5 p-2 bg-light mx-2 align-items-center justify-content-center text-dark">Or</div>

                                        <div class="big-sell-button rounded border mx-2">
                                                  <a href="/post-ad" class="d-flex rounded flex-column justify-content-center align-items-center p-3" title="Sell your used books online at great prices">
                                                            <img src="images/hand-money.svg" alt="Sell Old Books" class="icon">
                                                            <button class="btn-text">Sell Old Books</button>
                                                  </a>
                                        </div>
                              </div>
                    </div>

                    <div class="hero-part">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
        @foreach($images as $index => $image)
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach($images as $index => $image)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}" data-bs-interval="1000">
                <img src="{{URL::to('/')}}/{{ $image->scroller_image     }}" class="d-block sld-img" alt="...">
            </div>
        @endforeach
    </div>
</div>
                    </div>
          </div>


          <div class="about py-5 mb-3" style="background-color: #deeafe;">
                    <div class="container mb-5">
                              <p class="section-title mt-100 mx-auto my-5 text-center fs-1">How To Sell On <strong>Clankart™</strong></p>
                              <p class="section-subtitle w-100 text-center mx-auto my-5 fs-4">Well, you can sell your old used books very easily on Clankart for actual cash.

                                        Earning money by selling your old books is just 3 steps away from you :)</p>

                              <div class="card-container">
                                        <div class="card border-info mb-3">
                                                  <div class="card-header">
                                                            <img class="w-50 mx-auto d-block" src="{{URL::to('/')}}/images/seller-adve.svg" alt="">
                                                            <h3 class="card-title text-center">Post an ad for selling used books</h3>
                                                  </div>
                                                  <div class="card-body">
                                                            <p class="card-text text-center">Post an ad on Clankart describing your book details to sell your old books online.</p>
                                                  </div>
                                        </div>

                                        <div class="card border-info mb-3">
                                                  <div class="card-header">
                                                            <img class="w-50 mx-auto d-block" src="{{URL::to('/')}}/images/set-price.svg" alt="">
                                                            <h3 class="card-title text-center">Set the selling price for your books</h3>
                                                  </div>
                                                  <div class="card-body">
                                                            <p class="card-text text-center">Set the price for your books at which you want to sell them.</p>
                                                  </div>
                                        </div>

                                        <div class="card border-info mb-3">
                                                  <div class="card-header">
                                                            <img class="w-50 mx-auto d-block" src="{{URL::to('/')}}/images/money-release.svg" alt="">
                                                            <h3 class="card-title text-center">Get paid into your UPI/Bank account</h3>
                                                  </div>
                                                  <div class="card-body">
                                                            <p class="card-text text-center">You will get money into your account once you receive an order for your book.</p>
                                                  </div>
                                        </div>
                              </div>
                    </div>
          </div>

          <div class="about">
                    <div class="container mb-5">
                              <p class="section-title mt-100 mx-auto my-5 text-center fs-1">How To Purchase On <strong>Clankart™</strong></p>
                              <p class="section-subtitle w-100 text-center mx-auto my-5 fs-4">Well, you can buy second hand books very easily on Clankart.

                                        Saving some good amount of money by buying used (preloved) books is just 3 steps away from you :)</p>

                              <div class="card-container">
                                        <div class="card border-info mb-3">
                                                  <div class="card-header">
                                                            <img class="w-50 mx-auto d-block" src="{{URL::to('/')}}/images/search-item.svg" alt="">
                                                            <h3 class="card-title text-center">Select the used books you want</h3>
                                                  </div>
                                                  <div class="card-body">
                                                            <p class="card-text text-center">Search from over thousands of used books listed on Clankart.</p>
                                                  </div>
                                        </div>

                                        <div class="card border-info mb-3">
                                                  <div class="card-header">
                                                            <img class="w-50 mx-auto d-block" src="{{URL::to('/')}}/images/buy.svg" alt="">
                                                            <h3 class="card-title text-center">Place the order by making payment to Clankart</h3>
                                                  </div>
                                                  <div class="card-body">
                                                            <p class="card-text text-center">Then simply place the order by clicking on 'Buy Now' button.</p>
                                                  </div>
                                        </div>

                                        <div class="card border-info mb-3">
                                                  <div class="card-header">
                                                            <img class="w-50 mx-auto d-block" src="{{URL::to('/')}}/images/seller-ships.svg" alt="">
                                                            <h3 class="card-title text-center">Get the books delivered at your doorstep</h3>
                                                  </div>
                                                  <div class="card-body">
                                                            <p class="card-text text-center">The books will be delivered to you at your doorstep!</p>
                                                  </div>
                                        </div>
                              </div>
                    </div>
          </div>

          @endsection
</body>

</html>