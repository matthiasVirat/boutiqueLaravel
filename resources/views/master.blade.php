<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{asset('css/xzoom.css')}}">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="dns-prefetch" href="//fonts.gstatic.com">

        <title>@yield('title')</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Audiowide" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates" rel="stylesheet">
    </head>
    <body>
        @include('includes.header')
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">

                    @yield('content')

                </div>
            </div>
        </div>
        @yield('form_auth')
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>--}}
        <script
                src="https://code.jquery.com/jquery-3.4.0.js"
                integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo="
                crossorigin="anonymous"></script>
    {{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}
        <script src="{{ asset('js/app.js') }}" ></script>
        <script src="{{asset('js/xzoom.min.js')}}"></script>
        <script src="{{asset('js/script.js')}}"></script>
    </body>
</html>

