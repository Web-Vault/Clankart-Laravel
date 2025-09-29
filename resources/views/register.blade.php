<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register | ClanKart</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon-ck.jpg" type="image/x-icon">
        <link href="{{ URL::to('/') }}/css/bootstrap.min.css" rel="stylesheet">
        <script src="{{URL::to('/')}}/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="{{URL::to('/')}}/view_css/login.css">
</head>

<body>
        <div class="container" style="max-width: 560px;">
                @if(session('success'))
                        <div class="alert alert-success mt-3">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                        <div class="alert alert-danger mt-3">{{ session('error') }}</div>
                @endif

                <h3 class="mb-4 mt-4">Create Account</h3>
                <form action="{{ url('indexSignup') }}" method="post" class="border rounded p-4 bg-white shadow-sm">
                        @csrf
                        <div class="form-group">
                                <label for="signupName">First Name</label>
                                <input type="text" class="form-control" id="signupName" name="signupName"
                                        value="{{ old('signupName') }}" placeholder="Enter first name">
                                <span class="text-danger">
                                        @error('signupName') {{ $message }} @enderror
                                </span>
                        </div>
                        <div class="form-group">
                                <label for="signupEmail">Email</label>
                                <input type="email" class="form-control" id="signupEmail" name="signupEmail"
                                        value="{{ old('signupEmail') }}" placeholder="Enter email">
                                <span class="text-danger">
                                        @error('signupEmail') {{ $message }} @enderror
                                </span>
                        </div>
                        <div class="form-group">
                                <label for="signupPassword">Password</label>
                                <input type="password" class="form-control" id="signupPassword" name="signupPassword"
                                        placeholder="Enter password">
                                <span class="text-danger">
                                        @error('signupPassword') {{ $message }} @enderror
                                </span>
                        </div>
                        <div class="form-group">
                                <label for="signupConfirmPassword">Confirm Password</label>
                                <input type="password" class="form-control" id="signupConfirmPassword"
                                        name="signupConfirmPassword" placeholder="Confirm password">
                                <span class="text-danger">
                                        @error('signupConfirmPassword') {{ $message }} @enderror
                                </span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('login') }}" class="btn btn-link">Back to Login</a>
                                <button type="submit" class="update btn btn-primary">Signup</button>
                        </div>
                </form>
        </div>
</body>

</html>