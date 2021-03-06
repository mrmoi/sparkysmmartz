<nav class="navbar navbar-default navbar-sticky-top" role="navigation">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="customBrand navbar-brand" style="color: darkred;" href="{{ url('/') }}">
                {{--{{ config('app.name', 'Laravel') }}--}}
                Sparky's Coffee
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>


            <ul class="nav navbar-nav">
                <li class="{{ set_active('/') }}"><a href="{{ route('main') }}">Home</a></li>
                <li class="{{ set_active('coffee') }}"><a href="{{ route('coffee') }}">Coffee</a></li>
                <li class="{{ set_active('events') }}"><a href="{{ route('events') }}">Events</a></li>
                <li class="{{ set_active('contact') }}"><a href="{{ route('contact') }}">Contact</a></li>
                {{--{{ Request::path() }}--}}
            </ul>



            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @guest
                <li><a href="{{ route('login') }}">Staff Login</a></li>
                {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('subhome') }}">Sub Menu</a>

                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @endguest
            </ul>
        </div>
    </div>
</nav>