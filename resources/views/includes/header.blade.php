
<header>
    <nav>
    <div class="logo">
        <a href="/"><img src="{{asset('image/BIS_logo_header.png')}}"></a>
    </div>

        <ul class="nav">
            <div class="navbar">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/produit">Catalogue</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/basket">Panier</a>
                </li>
                @if(Auth::user() && Auth::user()->is_admin==1)
                    <li class="nav-item">
                        <a class="nav-link" href="/admin">Administration</a>
                    </li>
                @endif
            </div>

            <!-- Authentication Links -->
            @guest
                {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
                {{--</li>--}}
                {{--@if (Route::has('register'))--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="{{ route('login') }}">{{ __('login') }}</a>--}}
                    {{--</li>--}}
                {{--@endif--}}
            @else
                <li class="nav-item dropdown top-right links">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <a class="dropdown-item" href="{{ route('myAccount') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('myAccount').submit();">
                            {{ __('Mon Compte') }}
                        </a>

                        <form id="myAccount" action="{{ route('myAccount') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest

                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
{{--                            <a href="{{ url('/home') }}">Home</a>--}}
                        @else
                            <a href="{{ route('login') }}"><img src="{{asset('image/login.png')}}" alt="login" class="login-icone"></a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"><img src="{{asset('image/register.png')}}" alt="register" class="login-icone"></a>
                            @endif
                        @endauth
                    </div>
                @endif
        </ul>
    </nav>
</header>




