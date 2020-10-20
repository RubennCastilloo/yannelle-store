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
            <a class="nav-link" href="../../" id="inicio">INICIO <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <div class="dropdown">
            <a class="nav-link dropdown-toggle" id="tech" type="button" id="dropdownMenu2" data-toggle="dropdown">
              TECH
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
              <a href="../apple/" class="dropdown-item" ><i class="fab fa-apple"></i> Apple</a>
              <a href="../amazon/" class="dropdown-item" ><i class="fab fa-amazon"></i> Amazon</a>
              <a href="../google/" class="dropdown-item" ><i class="fab fa-google"></i> Google</a>
              <a href="../youtube/" class="dropdown-item" ><i class="fab fa-youtube"></i> YouTube</a>
              <a href="../facebook/" class="dropdown-item" ><i class="fab fa-facebook-square"></i> Facebook</a>
              <a href="../code/" class="dropdown-item" ><i class="fas fa-code"></i> Code</a>
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

    if (url === '/yannelle-store/tech/apple/' || url === '/yannelle-store/tech/amazon/' || url === '/yannelle-store/tech/google/' || url === '/yannelle-store/tech/youtube/' || url === '/yannelle-store/tech/facebook/' || url === '/yannelle-store/tech/code/') {
        document.querySelector('#tech').classList.add('selected');
    }
</script>