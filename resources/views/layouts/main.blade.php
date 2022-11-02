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
            <h1 style="font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">UJIKOM</h1>
            @yield('container')
        </div>
        <div class="footer">
            <br>
           <a href="/create"><button>Create</button></a>
           <button>Read</button>
           <button></button>
           <button></button>
        </div>
        </center>
    </body>
    </html>