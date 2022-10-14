<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Urban Arrchive - Galería de Arte</title>
  
  
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600'>

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Berkshire+Swash&display=swap" rel="stylesheet">
    
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/css/navbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/footer.css')}}">   
    <link rel="stylesheet" href="{{asset('assets/css/profile.css')}}">
    <script
      src="https://kit.fontawesome.com/7e5b2d153f.js"
      crossorigin="anonymous"
    ></script>
    <script defer src="{{asset('assets/js/navbar.js')}}"></script>

</head>

<body>
  <header class="header">
      <nav class="nav">
        <a href="{{route('dashboard')}}" class="logo nav-link">✠Urban Archive</a>
        <button class="nav-toggle" aria-label="Abrir menú">
          <i class="fas fa-bars"></i>
        </button>
        <ul class="nav-menu">
          <li class="nav-menu-item">
            <a href="#" class="nav-menu-link nav-link">Inicio</a>
          </li>
          <li class="nav-menu-item">
            <a href="#" class="nav-menu-link nav-link">Categorias</a>
          </li>
          <li class="nav-menu-item">
            <a href="{{ route('publicacion.perfilartista') }}" class="nav-menu-link nav-link">{{ Auth::user()->name }}</a>
          </li>
        </ul>
      </nav>
  </header>
	  <div class="container">
	  <div class="banner">
	  </div>
	  <main>
		<div class="row">
		  <div class="left col-lg-4">
			<div class="photo-left">
			  <img class="photo" src="https://picsum.photos/id/65/900/900.jpg"/>
			  <div class="active"></div>
			</div>
			<h4 class="name">{{Auth::user()->name }}</h4>
			<p class="info">{{Auth::user()->telefono}}</p>
			<p class="info">{{Auth::user()->email}}</p>
			<div class="stats row">

			  <div class="stat col-xs-4">
				<p class="number-stat">{{ $numpublicaciones }}</p>
				<p class="desc-stat">Cantidad de publicaciones</p>
			  </div>

			</div>
			<p class="desc">Hi ! My name is Jane Doe. I'm a UI/UX Designer from Paris, in France. I really enjoy photography and moutains.</p>
		  </div>
		  <div class="right col-lg-8">
			<ul class="nave">
			  <li>Publicaciones</li>
			</ul>
			<div class="row gallery">
                
			  <div class="col-md-4">
				 <img src="https://picsum.photos/id/65/900/900.jpg"/>
			  </div>
			  <div class="col-md-4">
				<img src="https://picsum.photos/id/65/900/900.jpg"/>
			  </div>
			  <div class="col-md-4">
				 <img src="https://picsum.photos/id/65/900/900.jpg"/>
			  </div>
			  <div class="col-md-4">
				 <img src="https://picsum.photos/id/65/900/900.jpg"/>
			  </div>
			  <div class="col-md-4">
				<img src="https://picsum.photos/id/65/900/900.jpg"/>
			  </div>
			  <div class="col-md-4">
				<img src="https://picsum.photos/id/65/900/900.jpg"/>
			  </div>
			</div>
		  </div>
	  </main>
	</div>
  
  
</body>
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
</html>
