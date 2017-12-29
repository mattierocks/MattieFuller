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
       <nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="nav-item" href="{{ route('home') }}">
                    <img src="{{asset('images/mattie-fuller-io.png')}}" alt="Mattie Fuller Logo" width="224" height="56" class="main-logo m-t-15 m-l-50" />
                </a>
            <div class="navbar-burger burger" data-target="navbarMain">
                <span></span>
                <span></span>
                <span></span>
            </div>
            </div>

            <div id="navbarMain" class="navbar-menu">
                <div class="navbar-start">
                    <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Portfolio</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Blog</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">About</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Contact</a>
                </div>
            </div>
                
                
                <div class="navbar-end">
                    @if (!Auth::guest())
                        <a href="{{ route('login') }}" class="navbar-item is-tab">Login</a>
                        <a href="{{ route('register') }}" class="navbar-item is-tab m-r-50">Register</a>
                    @else
                        <div class="navbar-item has-dropdown is-hoverable m-r-50">
                            <a href="#" class="navbar-link">
                                Hey Mattie!
                            </a>
                            <div class="navbar-dropdown is-boxed">
                                <a class="navbar-item" href="#">
                                    <span class="icon"><i class="fa fa-fw fa-user-circle-o m-r-5"></i></span>
                                    Profile
                                </a>
                                <a class="navbar-item" href="#">
                                    <span class="icon"><i class="fa fa-fw fa-bell m-r-5"></i></span>
                                    Notifications
                                </a>
                                <a class="navbar-item" href="#">
                                    <span class="icon"><i class="fa fa-fw fa-cog m-r-5"></i></span>
                                    Settings
                                </a>
                                <hr class="navbar-divider">
                                <a class="navbar-item" href="#">
                                    <span class="icon"><i class="fa fa-fw fa-sign-out m-r-5"></i></span>
                                    Logout
                                </a>     
                            </div>
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
