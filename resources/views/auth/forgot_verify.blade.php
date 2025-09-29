<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forgot Password - Verify OTP | ClanKart</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon-ck.jpg" type="image/x-icon">
        <link href="{{ URL::to('/') }}/css/bootstrap.min.css" rel="stylesheet">
        <script src="{{URL::to('/')}}/js/bootstrap.min.js"></script>
</head>

<body>
        <div class="container py-5" style="max-width: 520px;">
                <h3 class="mb-4">Verify OTP</h3>

                @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form action="{{ route('password.verify_otp') }}" method="post"
                        class="border rounded p-4 bg-white shadow-sm">
                        @csrf
                        <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                        value="{{ old('email', $prefillEmail ?? '') }}"
                                        placeholder="Enter your registered email" required>
                        </div>
                        <div class="form-group">
                                <label for="otp">OTP</label>
                                <input type="text" class="form-control" id="otp" name="otp"
                                        placeholder="Enter 6-digit OTP" required>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                                <a href="{{ route('password.request_form') }}" class="btn btn-link">Back</a>
                                <button type="submit" class="btn btn-primary">Verify OTP</button>
                        </div>
                </form>
        </div>
</body>

</html>