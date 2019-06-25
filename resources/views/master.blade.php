<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

</head>
<body>

<nav>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/produit">Catalogue</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/basket">Panier</a>
        </li>
        @if (Auth::user() && Auth::user()->is_admin == 1)
            <li class="nav-item">
                <a class="nav-link" href="/admin">Administration</a>
            </li>
        @endif
        {{--@guest--}}
            {{--<li>Toi t'es un invité</li>--}}
        {{--@endguest--}}


    </ul>
</nav>

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
        @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

            @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif


        <div class="content">


            @yield('content')


        </div>
</div>
</body>
</html>

