<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/homepage.css') }}">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div class="banner-text">
        <ul>
            <li><a href="#">Inicio</a></li>                             
            <li><a href="#">Conocenos</a></li>
            <li><a href="#">Contactanos</a></li>            
        </ul>

        <h2>Urban Archive</h2>
        <p>Por una vida con arte.</p>
		<ul>
            <li><a href="{{ route('login') }}">Ingresar</a></li>            
            <li><a class="register" href="{{ route('register') }}">Registrarse</a></li>   
        </ul>
    </div>

    <div class="animation-area">
        <ul class="box-area">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li> 
            <li></li>
        </ul>
    </div>
</body>

</html>