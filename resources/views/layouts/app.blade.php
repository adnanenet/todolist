<!DOCTYPE html>
<html lang="en">
<head>


    

</head>
<body>
    
    @yield('content')

</body>
</html>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- CSRF token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunitoo" rel="stylesheet">
        <!-- styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>todo App</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <title>Laravel CRUD</title>
    </head>
    <body>
        <h1>Todos</h1>
        <hr>
        
        <h2>Add new task</h2>
        <hr>

        <h2>Pending tasks</h2>
        <hr>

        <h2>Completed Tasks</h2>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </body>
</html>