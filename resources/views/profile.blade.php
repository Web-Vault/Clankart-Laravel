@extends('master')

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Profile | ClanKart</title>

        <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon-ck.jpg" type="image/x-icon">

        <link rel="stylesheet" href="{{URL::to('/')}}/view_css/profile.css">

</head>

<body>
        @section('main-content')

                <div class="cart-container container rounded border my-5 mx-auto  cart-main">

                        <div class="row">
                                <div class="col-3">
                                        <div class="nav my-3">

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
                                        <p class="p-3 fs-3 border-bottom">My Profile</p>


                                        <!-- @yield('login-needed') -->



                                        <div class="profile-form-container">
                                                <div class="tab">
                                                        <button class="tablinks active" id="changeProfileTab">Change
                                                                Profile</button>
                                                        <button class="tablinks" id="changePasswordTab">Change Password</button>
                                                </div>

                                                @if (isset($profile))


                                                        <form action="/update_profile" method="post" enctype="multipart/form-data"
                                                                class="profile-form" id="profileForm">
                                                                @csrf
                                                                <div class="form-group name-group">
                                                                        <div class="name-field">
                                                                                <label for="first-name">First Name</label>
                                                                                <input type="text" id="first-name" name="firstname"
                                                                                        placeholder="First Name"
                                                                                        value="{{$profile->firstname}}">
                                                                                <span class="text-danger">
                                                                                        @error('firstname')
                                                                                                {{ $message}}
                                                                                        @enderror
                                                                                </span>
                                                                        </div>
                                                                        <div class="name-field">
                                                                                <label for="last-name">Last Name</label>
                                                                                <input type="text" id="last-name" name="lastname"
                                                                                        placeholder="Last Name"
                                                                                        value="{{ $profile->lastname }}">
                                                                                <span class="text-danger">
                                                                                        @error('lastname')
                                                                                                {{ $message}}
                                                                                        @enderror
                                                                                </span>
                                                                        </div>
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="email">Email Address</label>
                                                                        <input type="email" id="email" name="email"
                                                                                value="{{ $profile->email }}">
                                                                        <span class="text-danger">
                                                                                @error('email')
                                                                                        {{ $message}}
                                                                                @enderror
                                                                        </span>
                                                                        <div class="email-verified">
                                                                                <img src="{{URL::to('/')}}/images/verified-icon.png"
                                                                                        alt="Verified">
                                                                                <span class="text-success">Email address is
                                                                                        verified</span>
                                                                        </div>
                                                                </div>
                                                                <div class="form-group">
                                                                        <div class="d-flex">
                                                                                <label for="phone-number">Phone Number (WhatsApp
                                                                                        only)</label>
                                                                                <div class="phone-input mx-5 w-100">
                                                                                        <span class="country-code">+91</span>
                                                                                        <input type="text" id="phone-number"
                                                                                                name="phone_number"
                                                                                                placeholder="Phone Number"
                                                                                                value="{{$profile->mobile_number}}">
                                                                                        <span class="text-danger">
                                                                                                @error('phone_number')
                                                                                                        {{ $message}}
                                                                                                @enderror
                                                                                        </span>
                                                                                </div>
                                                                        </div>
                                                                        {{-- <small>An active WhatsApp phone number only, as you will
                                                                                receive order-related updates only on WhatsApp.</small>
                                                                        --}}
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="address">Address</label>
                                                                        <input type="text" id="Address" name="Address"
                                                                                placeholder="City, State (Ex. Rajkot, Gujarat)"
                                                                                value="{{ $profile->address }}">
                                                                        <span class="text-danger">
                                                                                @error('Address')
                                                                                        {{ $message}}
                                                                                @enderror
                                                                        </span>
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="pincode">Pincode</label>
                                                                        <input type="text" id="pincode" name="pincode"
                                                                                placeholder="Your Pincode"
                                                                                value="{{$profile->pincode}}">
                                                                        <span class="text-danger">
                                                                                @error('pincode')
                                                                                        {{ $message}}
                                                                                @enderror
                                                                        </span>
                                                                </div>
                                                                <p class="border-bottom pb-3 mb-3 fs-6 text-primary">We won't share your
                                                                        email/phone number with anyone. They will be kept private. Nor
                                                                        do we use it to spam you in any way.</p>
                                                                <div class="form-actions">
                                                                        <button type="button" class="discard">Discard Changes</button>
                                                                        <button type="submit" class="update"
                                                                                name="update_profile">Update Profile</button>
                                                                </div>
                                                        </form>

                                                @endif


                                                <!-- Password Form -->
                                                <form action="change-password" method="post" class="password-form"
                                                        id="passwordForm" style="display: none;">
                                                        @csrf
                                                        <div class="form-group">
                                                                <label for="new-password">New Password</label>
                                                                <input type="password" id="new-password" name="password">
                                                                <span class="text-danger">
                                                                        @error('password')
                                                                                {{ $message}}
                                                                        @enderror
                                                                </span>
                                                        </div>
                                                        <div class="form-actions">
                                                                <button type="submit" class="update"
                                                                        name="change_password">Change Password</button>
                                                        </div>
                                                </form>

                                        </div>










                                </div>

                        </div>





                </div>

        @endsection

</body>
<script>
        document.addEventListener('DOMContentLoaded', function () {
                // Get elements
                const changeProfileTab = document.getElementById('changeProfileTab');
                const changePasswordTab = document.getElementById('changePasswordTab');
                const profileForm = document.getElementById('profileForm');
                const passwordForm = document.getElementById('passwordForm');

                // Event listener for Change Profile tab
                changeProfileTab.addEventListener('click', function () {
                        // Switch active class
                        changeProfileTab.classList.add('active');
                        changePasswordTab.classList.remove('active');

                        // Show/Hide forms
                        profileForm.style.display = 'block';
                        passwordForm.style.display = 'none';
                });

                // Event listener for Change Password tab
                changePasswordTab.addEventListener('click', function () {
                        // Switch active class
                        changePasswordTab.classList.add('active');
                        changeProfileTab.classList.remove('active');

                        // Show/Hide forms
                        passwordForm.style.display = 'block';
                        profileForm.style.display = 'none';
                });
        });
</script>

</html>