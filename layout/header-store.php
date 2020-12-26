<?php 
  include '../administrator/php/functions.php';
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Dosis:wght@300&family=Nerko+One&family=Nunito:wght@200;300&family=Padauk:wght@400;700&family=Raleway&display=swap" rel="stylesheet">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- User styles -->
    <link rel="stylesheet" href="../css/style-store.css">


    <title>Yannelle Store</title>
  </head>
  <body>

  <div class="container pb-0 mb-0 mt-2">
    <h1 class="text-center">Yannelle</h1>
  </div>
  <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white shadow-sm rounded">
  <div class="container">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="./" id="inicio">INICIO <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link acerca" href="./about">ACERCA</a>
        </li>

        <li class="nav-item">
            <a class="nav-link noticias" href="../">NOTICIAS</a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="./cart" id="">
            <div class="row shop-cart">
            <div class="col-md-6 p-0">
              <span class="material-icons">
              shopping_cart
              </span>
            </div>
            <div class="col-md-6 pl-1">
              <span class="pb-2 cart-numb">0</span>
            </div>
            </div>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./register" id="">
            <span class="material-icons">
            person
            </span>
          </a>
        </li>
        
    </ul>
  </div>
  </div>
</nav> 
<!-- fin navegacion -->

<script>
    var url = location.pathname;
    console.log(url);

    if (url === '/yannelle-store/store/') {
        document.querySelector('#inicio').classList.add('selected');
    }
</script>

<div class="container-fluid mt-3 mb-3">
<?php $publicaciones = obtenerAds('1',0,1); 
  if($publicaciones->num_rows) { 
  foreach($publicaciones as $publicacion) { ?>
  <div class="publicidad text-center align-items-center justify-content-center">
    <a href="<?php echo $publicacion['link'] ?>" target="_blank">
      <img src="../uploads/publ/<?php echo $publicacion['imagen'] ?>" class="h-100 w-100" alt="">
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