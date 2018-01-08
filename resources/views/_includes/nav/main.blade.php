<nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <a class="nav-item" href="{{ route('home') }}">
            <img src="{{asset('images/mattie-fuller-io.png')}}" alt="Mattie Fuller Logo" width="224" height="56" class="main-logo m-t-15 m-l-50" />
        </a>

        @if (Request::segment(1) == "manage")
            <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
            <span class="icon">
                <i class="fa fa-arrow-circle-right"></i>
            </span>
            </a>
        @endif

        <button class="button navbar-burger">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
    <div class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item is-tab m-l-10 is-active">Portfolio</a>
            <a class="navbar-item is-tab">Blog</a>
            <a class="navbar-item is-tab">About</a>
            <a class="navbar-item is-tab">Contact</a>
        </div> <!-- end of .navbar-start -->
            
        <div class="navbar-end">
            @if (Auth::guest())
                <a href="{{ route('login') }}" class="navbar-item is-tab">Login</a>
                <a href="{{ route('register') }}" class="navbar-item is-tab m-r-50">Register</a>
            @else
                <div class="navbar-item has-dropdown is-hoverable m-r-50">
                    <a href="#" class="navbar-link">
                        Hey {{ Auth::user()->name }}
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
                        <a class="navbar-item" href="{{ route('manage.dashboard') }}">
                            <span class="icon"><i class="fa fa-fw fa-cog m-r-5"></i></span>
                            Manage
                        </a>
                        <hr class="navbar-divider">
                        <a class="navbar-item" href="{{route('logout')}}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <span class="icon"><i class="fa fa-fw fa-sign-out m-r-5"></i></span>
                            Logout
                        </a> 
                        @include('_includes.forms.logout')    
                    </div>
                @endif
            </div>
    </div>
</nav>