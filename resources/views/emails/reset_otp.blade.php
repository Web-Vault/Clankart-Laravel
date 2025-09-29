<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClanKart Password Reset OTP</title>
</head>
<body>
    <p>Hello,</p>
    <p>Your one-time password (OTP) to reset your ClanKart account password is:</p>
    <h2 style="letter-spacing:3px;">{{ $otp }}</h2>
    <p>This OTP is valid for {{ $expires_minutes }} minutes.</p>
    <p>If you did not request this, you can ignore this email.</p>
    <br>
    <p>Thanks,<br>ClanKart Team</p>
</body>
</html>
