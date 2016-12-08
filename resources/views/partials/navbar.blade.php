<nav class="navbar navbar-default navbar-modified">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">

                <img class="navbar-brand-logo" style="width:256px;" src="{{asset('img/logo.png')}}" alt="{{ config('app.name') }} Logo">

            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav primary-menu">
                @if(Auth::guest())
                    <li class="@yield('schedules.classes')"><a href="{{url('/')}}">Schedules</a></li>
                @endif
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            @if(!Auth::user()->company_id)
                                <li><a href="{{route('admin.company.index')}}">Companies</a></li>
                            @endif
                            <li><a href="{{route('client.schedules.index')}}">Schedules</a></li>
                            <li><a href="{{route('client.routes.index')}}">Routes</a></li>
                            <li class="divider"></li>
                            <li>
                                <a href="{{route('client.password.reset')}}">
                                    Change Password
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>