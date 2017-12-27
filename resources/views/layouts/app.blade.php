<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MattieFuller') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
       <nav class="nav has-shadow">
            <div class="container">
                <div class="nav-left">
                    <a class="nav-item" href="{{ route('home') }}">
                        <img src="{{asset('images/LOGO GOES HERE')}}" alt="Mattie Fuller Logo" />
                    </a>
                    <a href="#" class="nav-item is-tab is-hidden-mobile m-l-10">Portfolio</a>
                    <a href="#" class="nav-item is-tab is-hidden-mobile">Blog</a>
                    <a href="#" class="nav-item is-tab is-hidden-mobile">About</a>
                    <a href="#" class="nav-item is-tab is-hidden-mobile">Contact</a>
                </div>
                
                <div class="nav-right">
                    @if (Auth::guest())
                        <a href="#" class="nav-item is-tab">Login</a>
                        <a href="#" class="nav-item is-tab">Register</a>
                    @else
                        <button class="dropdown nav-item is-tab">
                            Hey Mattie <span class="icon"><i class="fa fa-caret-down"></i></span>

                            <ul class="dropdown-menu">
                                <li><a href="#">Profile</a></li>
                                <li><a href="#"></a>Notification</li>
                                <li><a href="#"></a>Settings</li>
                                <li class="seperator"></li>
                                <li><a href="#"></a>Logout</li>
                            </ul>
                        </button>
                    @endif
                </div>
            </div>
       </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
