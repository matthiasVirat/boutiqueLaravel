<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates" rel="stylesheet">


</head>
<body>
@include('includes.header')

<div class="links">

    {{--<a href="https://nova.laravel.com">Nova</a>--}}
    {{--<a href="https://forge.laravel.com">Forge</a>--}}
    {{--<a href="https://github.com/laravel/laravel">GitHub</a>--}}
</div>

<div class="flex-center position-ref full-height">


    <div class="content">


            @yield('content')
    </div>
</div>
</body>
</html>

