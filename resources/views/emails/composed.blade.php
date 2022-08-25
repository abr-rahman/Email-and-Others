<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Composed Email</title>
</head>
<body>
    Hi! {{$data['body']}}
    <hr>

    <img src="{{ $message->embed(asset('profile_photo.jpg')) }}" alt="">
</body>
</html>
