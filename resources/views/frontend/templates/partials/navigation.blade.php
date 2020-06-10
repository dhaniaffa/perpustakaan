<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="{{route('homepage')}}" class="brand-logo" style="margin-left: 20px">Perpustakaan<Strong>KITA</Strong></a>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">apps</i></a>
            <ul class="right hide-on-med-and-down">
                @guest()
                    <li><a href="{{route('login')}}">Login</a></li>
                    <li><a href="{{route('register')}}">Register</a></li>
                @else
                    <li>
                        <a href="{{route('book.search')}}"><i class="material-icons">search</i></a>
                    </li>
                    <li><a href="{{route('homepage')}}"><i class="material-icons">home</i></a></li>
                    <li>
                        <a class='pink accent-5 dropdown-trigger' href='#' data-target='dropdown1'><i class="material-icons">account_circle</i></a>
                        <ul id='dropdown1' class='dropdown-content'>
                            <li><a href="{{route('home')}}"><i class="material-icons">person</i>{{auth()->user()->name}}</a></li>
                            <li class="divider" tabindex="-1"></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">remove_circle</i>Logout</a></li>
                        </ul>
                    </li>

                @endguest
            </ul>
        </div>
    </nav>
</div>

<ul class="sidenav" id="mobile-demo">
    @guest()
        <li><a href="{{route('login')}}">Login</a></li>
        <li><a href="{{route('register')}}">Register</a></li>
    @else
        <li><a href="{{route('homepage')}}"><i class="material-icons">home</i>Beranda</a></li>
        <li class="divider" tabindex="-1"></li>
        <li><a href="{{route('book.search')}}"><i class="material-icons">search</i>Cari</a></li>
        <li class="divider" tabindex="-1"></li>
        <li><a href="{{route('home')}}"><i class="material-icons">person</i>{{auth()->user()->name}}</a></li>
        <li class="divider" tabindex="-1"></li>
        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="material-icons">remove_circle</i>Logout</a></li>
    @endguest
</ul>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>
