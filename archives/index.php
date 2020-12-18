<?php 
  include '../administrator/php/functions.php';
  $resultado = obtenerPublicaciones();
  $total_registros = $resultado->num_rows;
  $articulos_por_pagina = 10;
  $paginas = ceil($total_registros / $articulos_por_pagina);

  if (!$_GET) {
    header('Location: ?pagina=1');
  }
  if ($resultado->num_rows) {
    if($_GET['pagina'] > $paginas || $_GET['pagina'] <= 0 ) {
        header('Location: ?pagina=1');
    }
  } 

  $iniciar = ($_GET['pagina'] -1) * $articulos_por_pagina;


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
    <link rel="stylesheet" href="../css/styles.css">


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
            <a class="nav-link" href="../" id="inicio">INICIO <span class="sr-only">(current)</span></a>
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

<div class="container-fluid mt-3 mb-3">
<?php $publicaciones = obtenerAds('1',0,1); 
  if($publicaciones->num_rows) { 
  foreach($publicaciones as $publicacion) { ?>
  <div class="publicidad text-center align-items-center justify-content-center">
    <a href="<?php echo $publicacion['link'] ?>" target="_blank">
      <img src="../uploads/publ/<?php echo $publicacion['imagen'] ?>" class="h-100 w-100" alt="<?php echo $publicacion['imagen'] ?>">
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

<div class="container mt-5 lineBottom">
    <h2 class="text-center"><i class="fas fa-folder-open"></i> Archivos</h2>
    <p class="text-left mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium reiciendis cupiditate minima unde praesentium, inventore molestias aut aspernatur quo, molestiae, rem quae ipsum incidunt labore delectus cum dolor beatae repudiandae?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non veritatis omnis dicta fugiat nam eveniet labore dolores, neque voluptates tempora ut quis corrupti libero aliquam ea vel quisquam accusantium voluptas?</p>
</div>

<div class="container-fluid notes mt-5 lineBottom">
    <div class="row">
        <div class="col-md-9">
            <div class="row justify-content-end">

            <?php $publicaciones = obtenerPublicacionesPaginadas($iniciar, $articulos_por_pagina); 
            if($publicaciones->num_rows) { 
            foreach($publicaciones as $publicacion) { ?>

                <div class="col-md-4 col-sm-4 mb-4">
                    <img src="../uploads/files/<?php echo $publicacion['portada'] ?>" alt="<?php echo $publicacion['portada'] ?>" class="h-200 w-100">
                </div>
                <div class="col-md-8 col-sm-8 lineBottom mb-4">
                    <a class="links" href="../nota.php?id=<?php echo $publicacion['id'] ?>"><h3><?php echo $publicacion['titulo'] ?></h3></a>
                    <p>Por <a class="autorLink" href=""><?php echo $publicacion['editor'] ?></a> | <?php $fechaNota = explode(',', $publicacion['fecha']); echo fechaMx(strval($publicacion['fecha'])) . ' ' . $fechaNota[1]; ?></p>
                </div>

                <?php } ?>

                <div class="col-md-12 mb-4 paginacion">
                  <nav aria-label="" class="">
                    <ul class="pagination">
                      <li class="page-item <?php echo $_GET['pagina'] <= 1 ? 'disabled' : '' ?>">
                        <a class="page-link" href="./?pagina=<?php echo $_GET['pagina'] - 1 ?>" tabindex="-1">
                          Anterior
                        </a>
                      </li>
                      <?php for ($i = 0; $i < $paginas; $i++) { 
                        ?> 
                        <li class="page-item <?php echo $_GET['pagina'] == $i + 1 ? 'active' : '' ?>">
                          <a class="page-link" href="./?pagina=<?php echo $i + 1 ?>">
                            <?php echo $i + 1 ?>
                          </a>
                        </li>
                      <?php
                      } ?>

                      <li class="page-item <?php echo $_GET['pagina'] >= $paginas ? 'disabled' : '' ?>">
                        <a class="page-link" href="./?pagina=<?php echo $_GET['pagina'] + 1 ?>">Siguiente</a>
                      </li>
                    </ul>
                  </nav>
                </div>

          <?php } else {
                ?> 
                  <h4 class="text-danger">No hay contenido para mostrar</h4>
                <?php
            } ?>

                


            </div>
        </div>
        <?php $publicaciones = obtenerAds('7',0,1); 
        if($publicaciones->num_rows) { 
        foreach($publicaciones as $publicacion) { ?>
        <div class="col-md-3 text-center d-sm-none d-md-block">
            <div class="publicidad text-center align-items-center justify-content-center">
            <a href="<?php echo $publicacion['link'] ?>" target="_blank">
              <img src="../uploads/publ/<?php echo $publicacion['imagen'] ?>" class="h-100 w-100" alt=" <?php echo $publicacion['imagen'] ?>">
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

<footer class="footer-page mt-5">
  <div class="container pt-3">
          <div class="row text-center">
              <div class="col-lg-4 col-12 pb-2">
                <div class="col text-center text-uppercase">
                  <div class="title-footer">
                    <small>Redes</small>
                    <h4>Sociales</h4>
                  </div>
                  <hr class="divider my-4 divider-footer">
                  <div class="row">
                    <div class="col-lg-12">
                      <a class="p-2" href="https://www.facebook.com/raivtechnologies/" target="_blank"><i class="fab fa-facebook-square icon-redes"></i></a>
                    
                      <a class="p-2" href="https://twitter.com/raivtech" target="_blank"><i class="fab fa-twitter icon-redes"></i></a>
                    
                      <a class="p-2" href="https://www.instagram.com/raivtechnologies/" target="_blank"><i class="fab fa-instagram icon-redes"></i></a>
                    
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-12 pb-2">
                <div class="col text-center text-uppercase">
                  <div class="title-footer">
                    <small>Ultimos</small>
                    <h4>Tweets</h4>
                  </div>
                  <hr class="divider my-4 divider-footer">
                  <div class="contenedor-tweets">
                    <a class="twitter-timeline" data-link-color="#fe4918" href="https://twitter.com/raivtech?ref_src=twsrc%5Etfw" width="300" height="300">Tweets de raivtech</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
              </div>
              <div class="col-lg-4 col-12 pb-2">
                <div class="col text-center">
                  <div class="title-footer text-uppercase">
                    <small>nuestro</small>
                    <h4>Newsletter</h4>
                  </div>
                  <hr class="divider my-4 divider-footer">
                  <form>
                    <div class="input-group input-group mb-3">
                        
                      <label for="form-control" class="text-left"> Suscríbete para enviarte un correos con lo más nuevo en tecnología.</label>
                      <input type="email" class="form-control form-email" placeholder="correo@correo.com" aria-label="Small">
                    </div>
                    <button class="btn btn-outline-info btn-email"> <i class="fas fa-envelope"></i> Suscribirme</button>
                  </form>
            </div>
          </div>
      </div>
      
  </footer>
 <div class="container-fluid">
    <div class="row copy-footer">
        <div class="col-md-12">
          <p class="text-center pt-3 pb-0">
              &copy; Todos los derechos reservados <span class="numero">RAIV Technologies</span> 2020 | Diseño: <a href="mailto:webmasters@raivtech.com" class="mail-footer">webmasters@raivtech.com</a>
          </p>
        </div>
      </div>
 </div>
  </footer>

  <script>
      var url = window.location.pathname;
      if(url === '/yannelle-store/archives/'){

        // Entretenimiento

        document.querySelector('.peliculas').href = '../entretenimiento/peliculas/';
        document.querySelector('.tv').href = '../entretenimiento/tv/';
        document.querySelector('.videojuegos').href = '../entretenimiento/videojuegos/';
        document.querySelector('.libros').href = '../entretenimiento/libros/';
        document.querySelector('.musica').href = '../entretenimiento/musica/';
        document.querySelector('.podcast').href = '../entretenimiento/podcast/';

        // Tecnologia

        document.querySelector('.apple').href = '../tech/apple/';
        document.querySelector('.amazon').href = '../tech/amazon/';
        document.querySelector('.google').href = '../tech/google/';
        document.querySelector('.youtube').href = '../tech/youtube/';
        document.querySelector('.facebook').href = '../tech/facebook/';
        document.querySelector('.code').href = '../tech/code/';
        document.querySelector('.more-tech').href = '../tech/more/';

        //Ciencia

        document.querySelector('.espacio').href = '../ciencia/espacio';
        document.querySelector('.salud').href = '../ciencia/salud';
        document.querySelector('.energia').href = '../ciencia/energia';
        document.querySelector('.ambiente').href = '../ciencia/ambiente';
        document.querySelector('.more-ciencia').href = '../ciencia/more';
      }
    </script>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../js/swiper.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>