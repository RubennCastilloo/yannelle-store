<?php 
  include 'administrator/php/functions.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- User styles -->
    <link rel="stylesheet" href="css/styles.css">


    <title>Yannelle Store</title>
  </head>
  <body>

  <div class="container">
    <h1 class="text-center">Yannelle</h1>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white shadow-sm rounded">
  <div class="container">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
        <li class="nav-item">
            <a class="nav-link" href="/" id="inicio">INICIO <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <div class="dropdown">
            <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown">
              TECH
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <a href="tech/apple/" class="dropdown-item" ><i class="fab fa-apple"></i> Apple</a>
              <a href="tech/amazon/" class="dropdown-item" ><i class="fab fa-amazon"></i> Amazon</a>
              <a href="tech/google/" class="dropdown-item" ><i class="fab fa-google"></i> Google</a>
              <a href="tech/youtube/" class="dropdown-item" ><i class="fab fa-youtube"></i> YouTube</a>
              <a href="tech/facebook/" class="dropdown-item" ><i class="fab fa-facebook-square"></i> Facebook</a>
              <a href="tech/code/" class="dropdown-item" ><i class="fas fa-code"></i> Code</a>
              <a href="tech/more/" class="dropdown-item" ><i class="fas fa-microchip"></i> Todo Tech</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <div class="dropdown">
            <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown">
              ENTRETENIMIENTO 
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" type="button"><i class="fas fa-film"></i> Peliculas</button>
              <button class="dropdown-item" type="button"><i class="fas fa-tv"></i> TV</button>
              <button class="dropdown-item" type="button"><i class="fas fa-gamepad"></i> Videojuegos</button>
              <button class="dropdown-item" type="button"><i class="fas fa-book"></i> Libros</button>
              <button class="dropdown-item" type="button"><i class="fas fa-music"></i> Musica</button>
              <button class="dropdown-item" type="button"><i class="fas fa-podcast"></i> Podcast</button>
              <a href="entretainment/more/" class="dropdown-item" ><i class="fas fa-laugh-beam"></i> Todo Entretenimiento</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <div class="dropdown">
            <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown">
              CIENCIA 
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item" type="button"><i class="fas fa-meteor"></i> Espacio</button>
              <button class="dropdown-item" type="button"><i class="fas fa-heartbeat"></i> Salud</button>
              <button class="dropdown-item" type="button"><i class="fas fa-plug"></i> Energía</button>
              <button class="dropdown-item" type="button"><i class="fas fa-leaf"></i> Ambiente</button>
              <a href="science/more/" class="dropdown-item" ><i class="fas fa-atom"></i> Todo Ciencia</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#">TIENDA</a>
        </li>
    </ul>
  </div>
  </div>
</nav> 
<!-- fin navegacion -->

<script>
    var url = location.pathname;
    console.log(url);

    if (url === '/yannelle-store/') {
        document.querySelector('#inicio').classList.add('selected');
    }
</script>

<div class="container-fluid mt-3 mb-3">
<?php $publicaciones = obtenerAds('1',0,1); 
  if($publicaciones->num_rows) { 
  foreach($publicaciones as $publicacion) { ?>
  <div class="publicidad text-center align-items-center justify-content-center">
    <a href="<?php echo $publicacion['link'] ?>" target="_blank">
      <img src="./uploads/publ/<?php echo $publicacion['imagen'] ?>" class="h-100 w-100" alt="">
    </a>
  </div>
  <?php } 
    } else {
      ?> 
        <div class="publicidad text-center align-items-center justify-content-center">
          Publicidad
        </div>
      <?php
    } ?>
</div>