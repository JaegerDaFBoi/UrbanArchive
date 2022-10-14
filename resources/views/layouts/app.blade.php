<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">


  <link rel="stylesheet" href="{{ asset('assets/css/navbar.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/footer.css') }}"> 
  <link rel="stylesheet" href="{{ asset('assets/css/gallery.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/registro.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/categorias.css') }}">
  


  <script src="https://kit.fontawesome.com/7e5b2d153f.js" crossorigin="anonymous"></script>
  <script defer src="{{ asset('assets/js/navbar.js') }}"></script>

  <!-- Scripts -->
  @vite(['resources/js/app.js'])

  <!-- Styles -->
  @livewireStyles
</head>

<body class="font-sans antialiased">
  <header class="header">
    <nav class="nav">
      <a href="{{ route('dashboard') }}" class="logo nav-link">✠Urban Archive</a>
      <button class="nav-toggle" aria-label="Abrir menú">
        <i class="fas fa-bars"></i>
      </button>
      <ul class="nav-menu">
        <li class="nav-menu-item">
          <a href="#" class="nav-menu-link nav-link">Inicio</a>
        </li>
        <li class="nav-menu-item">
          <a href="{{ route('categorias.index') }}" class="nav-menu-link nav-link">Categorias</a>
        </li>
        <li class="nav-menu-item">
          <a href="{{ route('publicacion.create') }}" class="nav-menu-link nav-link nav-menu-link_active">Crear
            Publicacion</a>
        </li>
        <li class="nav-menu-item">
          <a href="{{ route('publicacion.perfilartista') }}" class="nav-menu-link nav-link">{{ Auth::user()->name }}</a>
        </li>
        <li class="nav-menu-item">
          <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="nav-menu-link nav-link nav-menu-link_active">Cerrar sesión</button>
          </form>

        </li>
      </ul>
    </nav>
  </header>

  @yield('content')

  <footer class="footer-distributed">
    <div class="footer-right">

      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-linkedin"></i></a>
      <a href="#"><i class="fab fa-github"></i></a>

    </div>
    <div class="footer-left">

      <p class="footer-links">
        <a class="link-1" href="#">Urban Archive</a>

        <a href="contactanos.html">Soporte</a>


        <a href="#">Acerca de</a>


      </p>

      <p>Urban Archive &copy; 2022</p>
    </div>

  </footer>

  @stack('modals')

  @livewireScripts
</body>

</html>