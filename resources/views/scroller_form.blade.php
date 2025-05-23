@extends('master')

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>scroller form</title>
        <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon-ck.jpg" type="image/x-icon">

</head>

<body>

        @section('main-content')

        <form action="add_image" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="img"  accept="png" required>
                <button type="submit">Upload</button>
        </form>


        @endsection

</body>

</html>