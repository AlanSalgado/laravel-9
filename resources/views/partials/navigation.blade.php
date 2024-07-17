<nav class="navbar navbar-expand-md bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">Aplicacion</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('home') }}">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('posts.index') }}">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('about') }}">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{ route('contact') }}">Contacto</a>
        </li>
      </ul>
      @guest
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('register') }}">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('login') }}">Login</a>
          </li>
        </ul>
      @endguest
      @auth
        <a href="#" class="text-white">Hola, {{ Auth::user()->name }}</a> &nbsp; &nbsp;
        <form action="{{route('logout')}}" method="post">
            @csrf
            <a class="btn btn-danger" 
              onclick="this.closest('form').submit()"
            >Logout</a>
        </form>
      @endauth
    </div>
  </div>
</nav>