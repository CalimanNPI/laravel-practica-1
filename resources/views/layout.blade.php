<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Prueba')</title>
    <style>
        .active {
            color: red;
            text-decoration: none;
        }

    </style>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('js/app.js') }}">
</head>

<body>
    @include('partials.nav')

    @yield('content')
</body>

</html>
