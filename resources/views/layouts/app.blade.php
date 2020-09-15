<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary @yield('navbar-margin', 'mb-3 mb-lg-4 mb-xl-5')">
    <div class="container-fluid">
        <a class="navbar-brand font-weight-bold" href="{{ route('home') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ (request()->segment(1) == '') ? 'active' : '' }}" aria-current="page"
                       href="{{ route('home') }}">
                        <i class="fas fa-home"></i> Home
                    </a>
                </li>

                {{--                <li class="nav-item">--}}
                {{--                    <a class="nav-link {{ (request()->segment(1) == 'routes') ? 'active' : '' }}"--}}
                {{--                       href="{{ route('routes') }}">--}}
                {{--                        <i class="fas fa-hiking"></i> Routes--}}
                {{--                    </a>--}}
                {{--                </li>--}}
            </ul>

            {{--            <ul class="navbar-nav ml-auto">--}}
            {{--                @auth()--}}
            {{--                    <li class="nav-item">--}}
            {{--                        <a class="nav-link {{ (request()->segment(1) == 'vacations') ? 'active' : '' }}"--}}
            {{--                           href="{{ route('vacation.vacations') }}">Jouw Vakanties</a>--}}
            {{--                    </li>--}}
            {{--                    <li class="nav-item dropdown">--}}
            {{--                        <a class="nav-link dropdown-toggle {{ (request()->segment(1) == 'walks') ? 'active' : '' }}"--}}
            {{--                           href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">--}}
            {{--                            Jouw Wandelingen--}}
            {{--                        </a>--}}
            {{--                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
            {{--                            <li>--}}
            {{--                                <a class="dropdown-item" href="{{ route('walk.walks') }}">Al jouw wandelingen</a>--}}
            {{--                            </li>--}}
            {{--                            <li>--}}
            {{--                                <hr class="dropdown-divider">--}}
            {{--                            </li>--}}
            {{--                            <li>--}}
            {{--                                <a class="dropdown-item" href="{{ route('walk.import.import') }}">Meer informatie</a>--}}
            {{--                            </li>--}}
            {{--                            <li>--}}
            {{--                                <a class="dropdown-item" href="{{ route('walk.import.gpx') }}">Importeren via GPX</a>--}}
            {{--                            </li>--}}
            {{--                        </ul>--}}
            {{--                    </li>--}}
            {{--                    <li class="nav-item">--}}
            {{--                        <a class="nav-link {{ (request()->segment(1) == 'account') ? 'active' : '' }}"--}}
            {{--                           href="{{ route('account.account') }}">Jouw Account</a>--}}
            {{--                    </li>--}}
            {{--                @else--}}
            {{--                    <li class="nav-item">--}}
            {{--                        <a class="nav-link {{ (request()->segment(1) == 'login') ? 'active' : '' }}"--}}
            {{--                           href="{{ route('auth.login') }}">Inloggen</a>--}}
            {{--                    </li>--}}
            {{--                    <li class="nav-item">--}}
            {{--                        <a class="nav-link {{ (request()->segment(1) == 'register') ? 'active' : '' }}"--}}
            {{--                           href="{{ route('auth.register') }}">Registreren</a>--}}
            {{--                    </li>--}}
            {{--                @endauth--}}
            {{--            </ul>--}}
        </div>
    </div>
</nav>

<div class="@yield('container', 'container')">
    @yield('content')
</div>

</body>
</html>
