<nav class="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">
            <img src="images/nav-icon.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
            ProjectsMania
        </a>

        <ul class="nav nav-pills nav-fill justify-content-center">
            <li class="{{ setActive('home') }} nav-item">
                <a class="nav-link" href="/" aria-current="page">Home</a>
            </li>
            <li class="{{ setActive('project.*') }} nav-item">
                <a class="nav-link" href="{{ route('project.index') }}">Projects</a>
            </li>
            <li class="{{ setActive('contact.index') }} nav-item">
                <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
            </li>
            <li class="{{ setActive('about') }} nav-item">
                <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
        </ul>

        <ul class="nav">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} - {{ Auth::user()->profile }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
