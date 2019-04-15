<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="{{asset('css/xzoom.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
<script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{asset('js/xzoom.min.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>

