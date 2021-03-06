<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #e3f2fd;">
    <div class="container-fluid justify-content-between">
        <a class="navbar-brand" href="/">
            <img src="images/nav-icon.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
            ProjectsMania
        </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav justify-content-center me-auto mb-2 mb-lg-0">
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
        
        <ul class="navbar-nav justify-content-end">
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
        </div>
          
      </div>
    </div>
  </nav>







