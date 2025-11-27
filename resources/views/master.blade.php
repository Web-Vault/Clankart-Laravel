<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon-ck.jpg" type="image/x-icon">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- Bootstrap CSS -->
        <link href="{{ URL::to('/') }}/css/bootstrap.min.css" rel="stylesheet">

        <!-- Bootstrap JS -->
        <script src="{{URL::to('/')}}/js/bootstrap.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
                integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
                crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
                integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
                crossorigin="anonymous"></script>


                <link rel="stylesheet" href="{{URL::to('/')}}/view_css/master.css">
</head>

<script>
        document.addEventListener("DOMContentLoaded", function () {
                var profileIcon = document.querySelector(".profile-icon");
                var accOptions = document.querySelector(".acc-options");

                profileIcon.addEventListener("click", function () {
                        accOptions.classList.toggle("show");
                });
        });
</script>


<body>
        <div class="header">
                <header class="d-flex align-items-center">
                        <div class="logo-img">
                                <a href="{{URL::to('/')}}"><img src="{{URL::to('/')}}/images/clankart-logo.png"
                                                alt="clanKart"></a>
                        </div>

                        <div class="search">
                                <form action="search" method="post">
                                        @csrf
                                        <input type="text" class="rounded-0 form-control border-primary search-adverts"
                                                name="searchbar" id="searchbar">
                                        <button type="submit"
                                                class="btn btn-primary border-primary d-none d-md-block border rounded-0 search-btn">Search</button>
                                </form>
                        </div>

                        <!-- <div class="sellbtn">
                                                  <a href="{{URL::to('/')}}/post-ad" class="p-3 border-1 rounded-2">Sell Old Books</a>
                                        </div> -->

                        <div class="options d-flex">

                                <div class="account" id="account-drop-down">
                                        <svg height="25" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                                <title></title>
                                                <g id="about">
                                                        <path
                                                                d="M16,16A7,7,0,1,0,9,9,7,7,0,0,0,16,16ZM16,4a5,5,0,1,1-5,5A5,5,0,0,1,16,4Z">
                                                        </path>
                                                        <path
                                                                d="M17,18H15A11,11,0,0,0,4,29a1,1,0,0,0,1,1H27a1,1,0,0,0,1-1A11,11,0,0,0,17,18ZM6.06,28A9,9,0,0,1,15,20h2a9,9,0,0,1,8.94,8Z">
                                                        </path>
                                                </g>
                                        </svg><span> My account </span>
                                </div>

                                <div class="cart">
                                        <a class="link" href="{{URL::to('/')}}/cart">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-shopping-cart">
                                                        <circle cx="9" cy="21" r="1"></circle>
                                                        <circle cx="20" cy="21" r="1"></circle>
                                                        <path
                                                                d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6">
                                                        </path>
                                                </svg><br><span>Cart</span>
                                        </a>
                                </div>
                        </div>


                </header>
        </div>

        <main>

                <div class="acc-options  border" id="acc-options">


                        @if (session()->has('customer_email'))
                                                        <a class="link" href="{{URL::to('/')}}/profile">
                                                                        <div class="profile"
                                                                                        style="border-bottom: 1px solid #555; height: 80px; padding: 5px 0;">
                                                                                        <div class="profile-icon">
                                                                                                        <img src="{{URL::to('/')}}/images/default-profile.png" alt="profile"
                                                                                                                        style="border: 3px solid #0083CA;border-radius: 50%;padding: 5px;">
                                                                                        </div>
                                                                                        <div class="user-name">
                                                                                                        <h3 class="fs-3">Welcome, Clan!</h3>
                                                                                                        <p class="opacity-75 fs-6">Visit your profile...</p>
                                                                                        </div>
                                                                        </div>
                                                        </a>

                                                @endif

                        <div class="profile">
                                <div class="profile-icon">
                                        <img src="{{URL::to('/')}}/images/books.png" alt="categories">
                                </div>
                                <a class="link" href="{{URL::to('/')}}/book">
                                        <div class="user-name">
                                                <p class="opacity-75 fs-5"><a class="link" href="books"> Browse Top
                                                                Categories </a></p>
                                </a>
                        </div>
                </div>

                <a class="link" href="{{URL::to('/')}}/ads">
                        <div class="profile">
                                <div class="profile-icon">
                                        <img src="{{URL::to('/')}}/images/ads.png" alt="categories">
                                </div>
                                <div class="user-name">
                                        <p class="opacity-75 fs-5">My Ads</p>
                                </div>
                        </div>
                </a>

                <a class="link" href="{{URL::to('/')}}/orders">
                        <div class="profile">
                                <div class="profile-icon">
                                        <img src="{{URL::to('/')}}/images/orders.png" alt="categories">
                                </div>
                                <div class="user-name">
                                        <p class="opacity-75 fs-5">My Orders</p>
                                </div>
                        </div>
                </a>

                <a class="link" href="{{URL::to('/')}}/selling-orders">
                        <div class="profile">
                                <div class="profile-icon">
                                        <img src="{{URL::to('/')}}/images/selling orders.png" alt="categories">
                                </div>
                                <div class="user-name">
                                        <p class="opacity-75 fs-5">My Selling Orders</p>
                                </div>
                        </div>
                </a>

                <a class="link" href="{{URL::to('/')}}/chats">
                        <div class="profile">
                                <div class="profile-icon">
                                        <img src="{{URL::to('/')}}/images/chats.png" alt="categories">
                                </div>
                                <div class="user-name">
                                        <p class="opacity-75 fs-5">My Chats</p>
                                </div>
                        </div>
                </a>

                <a class="link" href="{{URL::to('/')}}/wishlist">
                        <div class="profile">
                                <div class="profile-icon">
                                        <img src="{{URL::to('/')}}/images/wishlist.png" alt="categories">
                                </div>
                                <div class="user-name">
                                        <p class="opacity-75 fs-5">My Wishlist</p>
                                </div>
                        </div>
                </a>

                <a class="link" href="{{URL::to('/')}}/how-it-works">
                        <div class="profile">
                                <div class="profile-icon">
                                        <img src="{{URL::to('/')}}/images/how it works.png" alt="categories">
                                </div>
                                <div class="user-name">
                                        <p class="opacity-75 fs-5">How It Works</p>
                                </div>
                        </div>
                </a>


                @if (session()->has('customer_email'))


                                        <a class="link" href="{{URL::to('/')}}/logout">
                                                        <div class="profile">
                                                                        <div class="profile-icon">
                                                                                        <img src="{{URL::to('/')}}/images/logout.png" alt="categories">
                                                                        </div>
                                                                        <div class="user-name">
                                                                                        <p class="opacity-75 fs-5">Logout</p>
                                                                        </div>
                                                        </div>
                                        </a>

                                @else

                                                                        <a class="link" href="{{URL::to('/')}}/login">
                                                                                        <div class="profile">
                                                                                                        <div class="profile-icon">
                                                                                                                        <img src="{{URL::to('/')}}/images/logout.png" alt="categories">
                                                                                                        </div>
                                                                                                        <div class="user-name">
                                                                                                                        <p class="opacity-75 fs-5">Login</p>
                                                                                                        </div>
                                                                                        </div>
                                                                        </a>

                                                                @endif


                </div>


                @yield('main-content')


        </main>

        <footer>
                <div class="footer-upper-part ">
                        <div class="footer-info container">
                                <h1>ClanKart community</h1>
                                <p>We're not just another shopping website where you buy from professional sellers - we
                                        are a vibrant community of students, book lovers across India who deliver
                                        happiness to each other! </p>
                                <div class="footer-img">
                                        <img src="{{URL::to('/')}}/images/footer_image.png" alt="">
                                </div>
                        </div>
                </div>

                <div class="footer-links ">
                        <div class="redirectors container">
                                <div class="part">
                                        <ul>
                                                <li class="first">About Us</li>
                                                <li>About Us</li>
                                                <li>Contact Us</li>
                                                <li>Leave Us Feedback</li>
                                                <li>Blog</li>
                                        </ul>
                                </div>
                                <div class="part">
                                        <ul>
                                                <li class="first">Useful links</li>
                                                <li>How it works ?</li>
                                                <li>Clankart Teleport</li>
                                                <li>Frequantly asked questions (FAQs)</li>
                                                <li>Chat Guidelines</li>
                                                <li>Term Of Use / Listing Policy / Privacy Policy</li>
                                        </ul>
                                </div>
                                <div class="part">
                                        <ul>
                                                <li class="first">Stay connected</li>
                                        </ul>
                                        <span class="social-icons">
                                                <img src="{{URL::to('/')}}/images/facebook.png" alt="facebook">
                                                <img src="{{URL::to('/')}}/images/instagram.png" alt="instagram">
                                                <img src="{{URL::to('/')}}/images/youtube.png" alt="youtube">
                                                <img src="{{URL::to('/')}}/images/twitter.png" alt="twitter">
                                        </span>
                                </div>
                        </div>
                        <div class="concept container">
                                <div class="concept-type Secure-Payment">
                                        <div class="concept-icon">
                                                <img src="{{URL::to('/')}}/images/card.png" alt="">
                                        </div>
                                        <div class="concept-info">
                                                <p>Secure Payment</p>
                                                <p class="info">100% Secure Online Transaction</p>
                                        </div>
                                </div>
                                <div class="concept-type Clankart-Trust">
                                        <div class="concept-icon">
                                                <img src="{{URL::to('/')}}/images/certified.png" alt="">
                                        </div>
                                        <div class="concept-info">
                                                <p>ClanKart Trust</p>
                                                <p class="info">Money stored safely & is transferred to <br> the seller
                                                        only after buyer confirmation</p>
                                        </div>
                                </div>
                                <div class="concept-type Customer-Support">
                                        <div class="concept-icon">
                                                <img src="{{URL::to('/')}}/images/support.png" alt="">
                                        </div>
                                        <div class="concept-info">
                                                <p>Customer Support</p>
                                                <p class="info">Friendly customer support</p>
                                        </div>
                                </div>
                        </div>
                        <hr class="container">
                        <div class="footer-text container">
                                <p>Clankart is a free platform where you can buy second hand books at very cheap prices.
                                        Well at Clankart, you can also sell used books online in India for actual cash.
                                        Buy used books online like college books, school books, reading books, much more
                                        near you.</p>
                        </div>
                        <hr class="container">
                        <div class="copyright container">
                                <p class="copyriight-claim">Copyright © 2024, <strong>Clankart™</strong> All Rights
                                        Reserved</p>
                                <span class="social-icons">
                                        <img src="{{URL::to('/')}}/images/visa.png" alt="visa">
                                        <img src="{{URL::to('/')}}/images/mastercard.png" alt="mastercard">
                                        <img src="{{URL::to('/')}}/images/paytm.png" alt="paytm">
                                        <img src="{{URL::to('/')}}/images/paypal.png" alt="paypal">
                                </span>
                        </div>
                </div>
        </footer>
</body>

<script>
        const clickButton = document.querySelector('#account-drop-down');
        const dropDown = document.querySelector('#acc-options');

        clickButton.addEventListener('click', function () {
                if (dropDown.style.display === 'none' || dropDown.style.display === '') {
                        dropDown.style.display = 'block';
                } else {
                        dropDown.style.display = 'none';
                }
        });
</script>

</html>