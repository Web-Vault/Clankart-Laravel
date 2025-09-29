<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Forgot Password - Reset | ClanKart</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon-ck.jpg" type="image/x-icon">
        <link href="{{ URL::to('/') }}/css/bootstrap.min.css" rel="stylesheet">
        <script src="{{URL::to('/')}}/js/bootstrap.min.js"></script>
</head>

<body>
        <div class="container py-5" style="max-width: 520px;">
                <h3 class="mb-4">Reset Password</h3>

                @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <form action="{{ route('password.reset') }}" method="post"
                        class="border rounded p-4 bg-white shadow-sm">
                        @csrf
                        <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email"
                                        value="{{ old('email', $prefillEmail ?? '') }}"
                                        placeholder="Enter your registered email" required>
                        </div>
                        <div class="form-group">
                                <label for="password">New Password</label>
                                <input type="password" class="form-control" id="password" name="password"
                                        placeholder="Enter new password" required>
                        </div>
                        <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation" placeholder="Re-enter new password" required>
                        </div>
                        <div class="d-flex justify-content-between align-items-center mt-3">
                                <a href="{{ route('password.verify_form') }}" class="btn btn-link">Back</a>
                                <button type="submit" class="btn btn-primary">Reset Password</button>
                        </div>
                </form>
        </div>
</body>

</html>