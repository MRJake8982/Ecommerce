<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/feather-icons"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <title> CrossXgame</title>
  </head>
  <body>
<!--inicio barra busqueda y logo    -->
  <nav class="navbar navbar-expand-lg navbar-ligth bg-ligth">

  <img class="navbar-brand" href="#" src="{{ asset('image/logo_cross.png') }}" width="180px" >
 <!-- insertar barra buscador y iconos de carrito e inicio de sesion -->
<div class="input-group mb-3" style="padding-top: 20px">
  <input type="text" class="form-control" placeholder="BUSCA TU PRODUCTO" aria-label="Recipient's username" aria-describedby="button-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2">BUSCAR</button>
  </div>
</div>
<div class="navbar-brand">
 <a class="nav-link" href="{{route('loggin')}}">Sign up<span class="sr-only"></span></a>
  </div>
  <div class="navbar-brand">
  <a class="nav-link" href="#">Carro<span class="sr-only"></span></a> 
</div>



</nav>
<!--fin barra busqueda y logo    -->
<!--inico barra articulos    -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " style="margin-left: 20% " id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('inicio')}}">INICIO  <span class="sr-only">(current)</span></a>
        </li>

<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         JUEGOS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">JUEGOS PS3</a>
          <a class="dropdown-item" href="#">JUEGOS PS4</a>
          <a class="dropdown-item" href="#">JUEGOS PSvita</a>
          <a class="dropdown-item" href="#">JUEGOS XBOX 360</a>
          <a class="dropdown-item" href="#">JUEGOS XBOX ONE</a>
          <a class="dropdown-item" href="#">JUEGOS NINTENDO DS</a>
          <a class="dropdown-item" href="#">JUEGOS NINTENDO 2DS</a>
          <a class="dropdown-item" href="#">JUEGOS NINTENDO 3DS</a>
          <a class="dropdown-item" href="#">JUEGOS NINTENDO SWITCH</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         CONSOLAS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">PLAYSTATION 3</a>
          <a class="dropdown-item" href="#">PLAYSTATION 4</a>
          <a class="dropdown-item" href="#">XBOX 360</a>
          <a class="dropdown-item" href="#">XBOX ONE</a>
          <a class="dropdown-item" href="#">NINTENDO 2DS</a>
          <a class="dropdown-item" href="#">NINTENDO 3DS</a>
          <a class="dropdown-item" href="#">NINTENDO SWITCH</a>
          <a class="dropdown-item" href="#">CONSOLAS MINI</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          FIGURAS Y LLAVEROS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">FIGURAS FUNKO POP</a>
          <a class="dropdown-item" href="#">LLAVEROS FUNKO POP</a>
         </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        ROPA
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">BILLETERAS</a>
          <a class="dropdown-item" href="#">POLERAS</a>
          <a class="dropdown-item" href="#">JOCKEYS</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ACCESORIOS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">ACCESORIOS PS3</a>
          <a class="dropdown-item" href="#">ACCESORIOS PS4</a>
          <a class="dropdown-item" href="#">ACCESORIOS XBOX 360</a>
          <a class="dropdown-item" href="#">ACCESORIOS XBOX ONE</a>
          <a class="dropdown-item" href="#">ACCESORIOS NINTENDO 2DS</a>
          <a class="dropdown-item" href="#">ACCESORIOS NINTENDO 3DS</a>
          <a class="dropdown-item" href="#">ACCESORIOS NINTENDO WII</a>
          <a class="dropdown-item" href="#">ACCESORIOS NINTENDO SWITCH</a>
          <a class="dropdown-item" href="#">ACCESORIOS ANDROID</a>


        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          SERVICIO TECNICO
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">PS3</a>
          <a class="dropdown-item" href="#">PS4</a>
          <a class="dropdown-item" href="#">XBOX 360</a>
          <a class="dropdown-item" href="#">XBOX ONE</a>
          <a class="dropdown-item" href="#">NINTENDO 2DS</a>
          <a class="dropdown-item" href="#">NINTENDO 3DS</a>
          <a class="dropdown-item" href="#">NINTENDO SWITCH</a>

        </div>
      </li>
    </ul>
  </div>
</nav>
<!--fin barra articulos  -->
    <div class="container">
    @yield('seccion-web')
  </div>
    

    <!-- Optional JavaScript -->
    
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>