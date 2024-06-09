<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Company Management</title>

        <!-- Fonts 
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> -->

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" >
        <!-- Scripts -->
        @vite(['resources/sass/app.scss','resources/css/app.css', 'resources/scss/app.scss', 'resources/js/app.js'])


        <style>
            body {
                background-image: url('/img/bg.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;  
                background-size: cover;
            }
        </style>       
    </head>
<body>
    <div class="container" >
        <div class="landingcard">
            <div class="title m-b-md">COMPANY MANAGEMENT</div> 

            @if (Route::has('login'))  
            <div>
                @auth
                    <button class="homebutton button1"><a href="{{ url('/home') }}" style="color:white">Home</a></button>
                @else
                    <button class="homebutton button1"><a href="{{ route('login') }}" style="color:white">Login</a></button>
                @endauth
            </div> 
            @endif 
        </div>
    </div>
</body>
</html>
