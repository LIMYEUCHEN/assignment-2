<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pizza Paradise</title> 
        
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" />

        <link href="/css/main.css" rel="stylesheet">
    </head>

    <body>
        @yield('content')
    </body>

    <footer>
        2024 | All Rights Reserved | Pizza Paradise
    </footer>
</html>