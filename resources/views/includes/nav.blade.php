<nav class="navbar navbar-light bg-light navbar-expand-md">
    <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
    </button>
    <a class="navbar-brand" href="#">Laravel flashcards</a>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        @auth
        <ul class="nav navbar-nav">
            <li class="active nav-item"><a href="{{ route('index') }}" class="nav-link">Revise</a>
            </li>
            <li class="nav-item"><a href="#" class="nav-link">Create cards</a>
            </li>
        </ul>
        @endauth
        <ul class="nav navbar-nav ml-auto"> 
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
        </ul>
    </div>
</nav>
