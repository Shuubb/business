

  <nav id="mainNav" class="navbar navbar-expand-lg navbar-light px-5 w-100">
    <a class="navbar-brand" href="/"><img src="{{ asset('images/Design1.png') }}" alt="Logo"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
        </ul>

        @guest
        
          <ul class="navbar-nav navbar-right">
            <li class="nav-item active">
              <a class="nav-link auth" href="/register">Sign In</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link auth" href="/login">Log In</a>
            </li>
          </ul>

        @else

        @if (Auth::user()->isAdmin())
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/admin">Admin</a>
            </li>
          </ul>
        @endif
        
        <ul class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Profile
          </a>
          <div class="dropdown-menu w-fit-content">
            <hr>
            <button type="submit" form="logout-form">Log Out</button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          </div>
        </ul>
        @endguest
      </div>
  </nav>