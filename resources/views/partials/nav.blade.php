<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">
        <img src="images/nav-icon.png" alt="" width="30" height="30" class="d-inline-block align-text-top">
        Proyectos
      </a>

      <ul>
        <ul class="nav justify-content-center">
            <li class="{{ setActive('home') }} nav-item" >
                <a class="nav-link" href="/" aria-current="page">Home</a>
            </li>
            <li class="{{ setActive('project.*') }} nav-item" >
                <a class="nav-link" href="{{ route('project.index') }}">Projects</a>
            </li>
            <li class="{{ setActive('contact.index') }} nav-item">
                <a class="nav-link" href="{{ route('contact.index') }}">Contact</a>
            </li>
            <li class="{{ setActive('about') }} nav-item">
                <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
          </ul>
    </ul>
    </div>
  </nav>


