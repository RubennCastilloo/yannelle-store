<?php 
    include 'administrator/php/functions.php';

    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    if (!$id) {
        ?> 
          <div class="justify-content-center text-center mt-5">
            <h3 class="text-danger">No pudimos localizar el contenido de esta pagina</h3>
                        <a class="btn btn-success go-store mt-3" href="./"> Regresar a Inicio </a>
          </div>
        <?php
    }
    
      $respuesta = obtenerPublicacion($id);
      $nota = $respuesta->fetch_assoc();


?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter cards -->

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@raivtech" />
    <meta name="twitter:title" content="<?php echo $nota['titulo'] ?>" />
    <meta name="twitter:description" content="<?php echo $nota['subtitulo'] ?>" />
    <meta name="twitter:image" content="./uploads/files/<?php echo ($nota['portada']) ? $nota['portada'] : ''; ?>" />

    <!-- Fin twitter cards -->

    <!-- facebook open graph -->

    <meta property="og:title" content="<?php echo $nota['titulo'] ?>">
    <meta property="og:description" content="<?php echo $nota['subtitulo'] ?>">
    <meta property="og:image" content="./uploads/files/<?php echo ($nota['portada']) ? $nota['portada'] : ''; ?>">
    <meta property="og:url" content="https://yannelle.com/nota.php?id=<?php echo $id; ?>">

    <!-- fin facebook open graph -->

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">



    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- User styles -->
    <link rel="stylesheet" href="css/styles.css">


    <title><?php echo ($nota['titulo']) ? $nota['titulo'] : ''; ?></title>
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
            <a class="nav-link" href="./" id="inicio">INICIO <span class="sr-only">(current)</span></a>
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
              <a href="#" class="dropdown-item more-tech"><i class="fas fa-plus"></i> Más</a>
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
              <a href="#" class="dropdown-item more-ciencia"><i class="fas fa-atom"></i> Todo Ciencia</a>
            </div>
          </div>
        </li>

        <!-- <li class="nav-item">
            <a class="nav-link" href="#">TIENDA</a>
        </li> -->
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

<?php $publicaciones = obtenerAds('4',0,1); 
  if($publicaciones->num_rows) { 
  foreach($publicaciones as $publicacion) { ?>
  <div class="publicidad text-center align-items-center justify-content-center mt-3 mb-3">
    <a href="<?php echo $publicacion['link'] ?>" target="_blank">
      <img src="./uploads/publ/<?php echo $publicacion['imagen'] ?>" class="h-100 w-100" alt="">
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


<div class="container notes mt-5 lineBottom">
    <div class="row">
        <div class="col-md-9">
        
        <?php if($nota !== NULL){ ?>
        <div itemscope itemtype="https://schema.org/Article"> <!-- inicio de datos estructurados -->
            <meta itemprop="mainEntityOfPage" content="True" />
            <h1 class="text-left" itemprop="headline"><?php echo ($nota['titulo']) ? $nota['titulo'] : ''; ?></h1>
            <h5 itemprop="description"><?php echo ($nota['subtitulo']) ? $nota['subtitulo'] : ''; ?></h5>
            <div >
              <p>Por <a class="autorLink" href="<?php echo $nota['link_twitter'] ?>" target="_blank"> <span itemprop="author"> <?php echo ($nota['editor']) ? $nota['editor'] : ''; ?> </span> </a> | <a class="autorLink" href="<?php echo $nota['link_twitter'] ?>" target="_blank">@<?php echo ($nota['twitter']) ? $nota['twitter'] : ''; ?></a> | <span itemprop="datePublished" content="<?php echo ($nota['fecha']) ? $nota['fecha'] : ''; ?>"><?php $fechaNota = explode(',', $nota['fecha']); echo fechaMx(strval($nota['fecha'])) . ' ' . $fechaNota[1] ? fechaMx(strval($nota['fecha'])) . ' ' . $fechaNota[1] : ''; ?> </span> <span itemprop="dateModified" content="<?php echo ($nota['fecha']) ? $nota['fecha'] : ''; ?>"></span> </p>
            </div>
            <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization" content="Yannelle">
              <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                <meta itemprop="url" content="https://yannelle.com">
              </div> 
              <meta itemprop="name" content="Tutoriales En Linea"></span>
            </div>
            
            <div class="picture">
                <img src="./uploads/files/<?php echo ($nota['portada']) ? $nota['portada'] : ''; ?>" class="h-200 w-100" alt="<?php echo ($nota['portada']) ? $nota['portada'] : ''; ?>" itemprop="image">
            </div>
            <div class="content contenido-nota mt-4" id="contenido">
                <?php echo htmlspecialchars_decode($nota['contenido']) ? htmlspecialchars_decode($nota['contenido']) : ''; ?>
            </div>
          </div> <!-- Fin de datos estructurados -->

            <?php } else {?>

            <h4 class="text-center text-danger">No pudimos localizar la nota que buscas</h4>
            <p class="text-center">Te sugerimos <a href="./" class="autorLink">regresar</a> para buscar más contenido</p>

            <?php }?>

            <div class="last-news mt-5">
                <small class="text-uppercase">Últimas</small>
                <h3 class="text-uppercase">noticias</h3>

                <div class="notes mt-3">
                    <div class="row">
                    <?php $publicaciones = obtenerUltimasPublicaciones(5); 
                    if($publicaciones->num_rows) { 
                    foreach($publicaciones as $publicacion) { ?>
                        <div class="col-md-4 col-sm-4 mb-4">
                            <img src="./uploads/files/<?php echo $publicacion['portada'] ?>" alt="" class="h-200 w-100">
                        </div>
                        <div class="col-md-8 col-sm-8 lineBottom mb-4">
                            <a class="links" href="./nota.php?id=<?php echo $publicacion['id'] ?>"><h3><?php echo $publicacion['titulo'] ?></h3></a>
                            <p>Por <a class="autorLink" href="<?php echo $publicacion['link_twitter'] ?>" target="_blank"><?php echo $publicacion['editor'] ?></a> | <?php echo fechaMx(strval($publicacion['fecha'])) ?></p>
                        </div>

                    <?php } 
                    } ?>

                        
                    </div>

                    <div class="text-center justify-content-center align-items-center mb-4 col-md-12">
                      <a href="./archives/" class="btn btn-outline-info btn-more col-md-12">Más contenido</a>  
                    </div>
                </div>
            </div>
        </div>
        <?php $publicaciones = obtenerAds('5',0,1); 
        if($publicaciones->num_rows) { 
        foreach($publicaciones as $publicacion) { ?>
        <div class="col-md-3 text-center 	d-sm-none d-md-block">
            <div class="publicidad text-center align-items-center justify-content-center">
            <a href="<?php echo $publicacion['link'] ?>" target="_blank">
              <img src="./uploads/publ/<?php echo $publicacion['imagen'] ?>" class="h-100 w-100" alt="">
            </a>
            </div>
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
</div>

<script>
  document.querySelectorAll(".contenido-nota a").forEach(function(a){
    a.setAttribute('target', '_blank');
  })

      var url = window.location.pathname;
      if(url === '/yannelle-store/nota.php'){

        // Entretenimiento

        document.querySelector('.peliculas').href = './entretenimiento/peliculas/';
        document.querySelector('.tv').href = './entretenimiento/tv/';
        document.querySelector('.videojuegos').href = './entretenimiento/videojuegos/';
        document.querySelector('.libros').href = './entretenimiento/libros/';
        document.querySelector('.musica').href = './entretenimiento/musica/';
        document.querySelector('.podcast').href = './entretenimiento/podcast/';

        // Tecnologia

        document.querySelector('.apple').href = './tech/apple/';
        document.querySelector('.amazon').href = './tech/amazon/';
        document.querySelector('.google').href = './tech/google/';
        document.querySelector('.youtube').href = './tech/youtube/';
        document.querySelector('.facebook').href = './tech/facebook/';
        document.querySelector('.code').href = './tech/code/';
        document.querySelector('.more-tech').href = './tech/more/';

        //Ciencia

        document.querySelector('.espacio').href = './ciencia/espacio';
        document.querySelector('.salud').href = './ciencia/salud';
        document.querySelector('.energia').href = './ciencia/energia';
        document.querySelector('.ambiente').href = './ciencia/ambiente';
        document.querySelector('.more-ciencia').href = './ciencia/more';
      }
</script>

<?php 
    include './layout-sub/footer.php';
?>