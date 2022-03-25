<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="cdrf-token" content="{{ csrf_token() }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=dvice-width initial-scale=1.0">
        <meta http-equiv="X-UA-Comptible" content="ie=edg">
        <script src="{{ asset('js/app.js')}}" defer></script>

        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>

    <title>Todo App</title>

    <body>
        @yield('content')
    </body>

</html>