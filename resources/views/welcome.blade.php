<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="card">
            <div class="card-">
                <h2>Email Software</h2>
            </div>
            <div class="card-body">
                <form action="{{route('email.send')}}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <h3>Compose</h3>
                    <hr>
                    <input type="text" name="to_email" class="form-control" placeholder="Enter recepients email addresss">
                    <br>
                    <br>
                    <input type="text" name="subject" class="form-control" placeholder="Enter Subject">
                    <br>
                    <br>
                    <textarea name="body" id="body" cols="30" rows="10" class="form-control" placeholder="Enter email body"></textarea>
                    <br>
                    <br>
                    <input type="file" name="image" id="image">
                    <br>
                    <br>
                    <input type="submit" value="Send Email">

                </form>
            </div>
        </div>
    </body>
</html>
