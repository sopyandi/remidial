<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="css/style.css">
        <title>{{$title}}</title>
    </head>
    <body>
        <center>
        <div class="box">
            @include('partial/head')
            <hr>
            <div class="container">
            @yield('container')
            </div>
            <br><hr>
            @include('partial/link')
            <br>
        </div>
    </center>
    </body>
    </html>
<style>
    b{
        color: red;
    }
</style>
