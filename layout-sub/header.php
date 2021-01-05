<?php 
  include '../../administrator/php/functions.php';
?>
<!doctype html>
<html lang="es">
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
    <link rel="stylesheet" href="../../css/styles.css">


    <title>Yannelle News</title>
  </head>
  <body>

  <div class="container-fluid">
    <div class="text-center">
      <a href="/">
        <img src="../../images/logos/logo-rosa.png" alt=""> 
      </a>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white shadow-sm rounded">
  <div class="container">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto">
        <li class="nav-item">
            <a class="nav-link" href="../../" id="inicio">INICIO <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <div class="dropdown">
            <a class="nav-link dropdown-toggle" id="tech" type="button" id="dropdownMenu2" data-toggle="dropdown">
              TECH
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <a href="#" class="dropdown-item apple"><i class="fab fa-apple"></i> Apple</a>
              <a href="#" class="dropdown-item amazon"><i class="fab fa-amazon"></i> Amazon</a>
              <a href="#" class="dropdown-item google"><i class="fab fa-google"></i> Google</a>
              <a href="#" class="dropdown-item youtube"><i class="fab fa-youtube"></i> YouTube</a>
              <a href="#" class="dropdown-item facebook"><i class="fab fa-facebook-square"></i> Facebook</a>
              <a href="#" class="dropdown-item code"><i class="fas fa-code"></i> Code</a>
              <a href="#" class="dropdown-item more-tech"><i class="fas fa-plus"></i> Más Tech</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <div class="dropdown">
            <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown">
              ENTRETENIMIENTO 
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <a href="#" class="dropdown-item peliculas"><i class="fas fa-film"></i> Peliculas</a>
              <a href="#" class="dropdown-item tv"><i class="fas fa-tv"></i> TV</a>
              <a href="#" class="dropdown-item videojuegos"><i class="fas fa-gamepad"></i> Videojuegos</a>
              <a href="#" class="dropdown-item libros"><i class="fas fa-book"></i> Libros</a>
              <a href="#" class="dropdown-item musica"><i class="fas fa-music"></i> Musica</a>
              <a href="#" class="dropdown-item podcast"><i class="fas fa-podcast"></i> Podcast</a>
              <a href="#" class="dropdown-item more-entretenimiento"><i class="fas fa-plus"></i> Más Entretenimiento</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
          <div class="dropdown">
            <a class="nav-link dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown">
              CIENCIA 
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <a href="#" class="dropdown-item espacio"><i class="fas fa-meteor"></i> Espacio</button>
              <a href="#" class="dropdown-item salud"><i class="fas fa-heartbeat"></i> Salud</button>
              <a href="#" class="dropdown-item energia"><i class="fas fa-plug"></i> Energía</button>
              <a href="#" class="dropdown-item ambiente"><i class="fas fa-leaf"></i> Ambiente</button>
              <a href="#" class="dropdown-item more-ciencia"><i class="fas fa-atom"></i> Más Ciencia</a>
            </div>
          </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="../../store/">TIENDA</a>
        </li>
    </ul>
  </div>
  </div>
</nav> 
<!-- fin navegacion -->

<script>
    var url = location.pathname;
    console.log(url);

    if (url === '/yannelle-store/tech/apple/' || url === '/yannelle-store/tech/amazon/' || url === '/yannelle-store/tech/google/' || url === '/yannelle-store/tech/youtube/' || url === '/yannelle-store/tech/facebook/' || url === '/yannelle-store/tech/code/' || url === '/yannelle-store/tech/more/') {
        document.querySelector('#tech').classList.add('selected');
    }
</script>

<?php $publicaciones = obtenerAds('6',0,1); 
  if($publicaciones->num_rows) { 
  foreach($publicaciones as $publicacion) { ?>
  <div class="publicidad text-center align-items-center justify-content-center mt-3 mb-3">
    <a href="<?php echo $publicacion['link'] ?>" target="_blank">
      <img src="../../uploads/publ/<?php echo $publicacion['imagen'] ?>" class="h-100 w-100" alt="">
    </a>
  </div>
  <?php } 
    } else {
      ?> 
        <div class="publicidad text-center align-items-center justify-content-center mt-3 mb-3">
          Publicidad
        </div>
      <?php
    } ?>

    <script>
      var url = window.location.pathname;
      if(url === '/yannelle-store/tech/apple/' || url === '/yannelle-store/tech/amazon/' || url === '/yannelle-store/tech/google/' || url === '/yannelle-store/tech/youtube/' || url === '/yannelle-store/tech/facebook/' || url === '/yannelle-store/tech/code/' || url === '/yannelle-store/tech/more/'){
        document.querySelector('.peliculas').href = '../../entretenimiento/peliculas/';
        document.querySelector('.tv').href = '../../entretenimiento/tv/';
        document.querySelector('.videojuegos').href = '../../entretenimiento/videojuegos/';
        document.querySelector('.libros').href = '../../entretenimiento/libros/';
        document.querySelector('.musica').href = '../../entretenimiento/musica/';
        document.querySelector('.podcast').href = '../../entretenimiento/podcast/';
        document.querySelector('.more-entretenimiento').href = '../../entretenimiento/more/';

        // Tecnologia

        document.querySelector('.apple').href = '../apple/';
        document.querySelector('.amazon').href = '../amazon/';
        document.querySelector('.google').href = '../google/';
        document.querySelector('.youtube').href = '../youtube/';
        document.querySelector('.facebook').href = '../facebook/';
        document.querySelector('.code').href = '../code/';
        document.querySelector('.more-tech').href = '../more/';

        //Ciencia

        document.querySelector('.espacio').href = '../../ciencia/espacio';
        document.querySelector('.salud').href = '../../ciencia/salud';
        document.querySelector('.energia').href = '../../ciencia/energia';
        document.querySelector('.ambiente').href = '../../ciencia/ambiente';
        document.querySelector('.more-ciencia').href = '../../ciencia/more';
      }

      if(url === '/yannelle-store/entretenimiento/peliculas/' || url === '/yannelle-store/entretenimiento/tv/' || url === '/yannelle-store/entretenimiento/videojuegos/' || url === '/yannelle-store/entretenimiento/libros/' || url === '/yannelle-store/entretenimiento/musica/' || url === '/yannelle-store/entretenimiento/podcast/'  || url === '/yannelle-store/entretenimiento/more/'){
        document.querySelector('.peliculas').href = '../peliculas/';
        document.querySelector('.tv').href = '../tv/';
        document.querySelector('.videojuegos').href = '../videojuegos/';
        document.querySelector('.libros').href = '../libros/';
        document.querySelector('.musica').href = '../musica/';
        document.querySelector('.podcast').href = '../podcast/';
        document.querySelector('.more-entretenimiento').href = '../more/';

        // Tecnologia

        document.querySelector('.apple').href = '../../tech/apple/';
        document.querySelector('.amazon').href = '../../tech/amazon/';
        document.querySelector('.google').href = '../../tech/google/';
        document.querySelector('.youtube').href = '../../tech/youtube/';
        document.querySelector('.facebook').href = '../../tech/facebook/';
        document.querySelector('.code').href = '../../tech/code/';
        document.querySelector('.more-tech').href = '../../tech/more/';

        // Ciencia

        document.querySelector('.espacio').href = '../../ciencia/espacio';
        document.querySelector('.salud').href = '../../ciencia/salud';
        document.querySelector('.energia').href = '../../ciencia/energia';
        document.querySelector('.ambiente').href = '../../ciencia/ambiente';
        document.querySelector('.more-ciencia').href = '../../ciencia/more';
      }

      if(url === '/yannelle-store/ciencia/espacio/' || url === '/yannelle-store/ciencia/salud/' || url === '/yannelle-store/ciencia/energia/' || url === '/yannelle-store/ciencia/ambiente/' || url === '/yannelle-store/ciencia/more/'){
        document.querySelector('.peliculas').href = '../../entretenimiento/peliculas/';
        document.querySelector('.tv').href = '../../entretenimiento/tv/';
        document.querySelector('.videojuegos').href = '../../entretenimiento/videojuegos/';
        document.querySelector('.libros').href = '../../entretenimiento/libros/';
        document.querySelector('.musica').href = '../../entretenimiento/musica/';
        document.querySelector('.podcast').href = '../../entretenimiento/podcast/';
        document.querySelector('.more-entretenimiento').href = '../../entretenimiento/more/';

        // Tecnologia

        document.querySelector('.apple').href = '../../tech/apple/';
        document.querySelector('.amazon').href = '../../tech/amazon/';
        document.querySelector('.google').href = '../../tech/google/';
        document.querySelector('.youtube').href = '../../tech/youtube/';
        document.querySelector('.facebook').href = '../../tech/facebook/';
        document.querySelector('.code').href = '../../tech/code/';
        document.querySelector('.more-tech').href = '../../tech/more/';

        // Ciencia

        document.querySelector('.espacio').href = '../espacio';
        document.querySelector('.salud').href = '../salud';
        document.querySelector('.energia').href = '../energia';
        document.querySelector('.ambiente').href = '../ambiente';
        document.querySelector('.more-ciencia').href = '../more';
      }
    </script>