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
    <link rel="stylesheet" href="../../css/style-store.css">


    <title>Yannelle Store</title>
  </head>
  <body>

  <div class="container text-center justify-content-center align-items-center mt-5">

    <div class="row">
        <div class="col-md-3">
            <h2>Yannelle Store</h2>
            <div class="row">
                <div class="col-md-12 mt-3">
                    <a class="btn-register btn-outline-dark bnt-register d-flex" href="../register"> 
                        <span class="material-icons mr-2">
                        how_to_reg
                        </span>
                        Crear Cuenta
                    </a>
                </div>
                <div class="col-md-12 mt-3">
                    <a class="btn-register btn-outline-dark d-flex" href="../">
                        <span class="material-icons mr-2">
                        shopping_bag
                        </span>
                        Volver a la tienda
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-8 offset-md-1 login-form">
        <h2>Iniciar Sesión</h2>
            <form class="new-user">
                <div class="form-row">
                    <div class="col-lg-6 mb-3">
                        Email: <span id="emailOK" class="text-center"></span>
                        <input class="form-control" type="email" placeholder="Email " id="mail">
                    </div>
                    <div class="col-lg-6 mb-3">
                        Password:
                        <input class="form-control" type="password" placeholder="Password " id="password">
                    </div>
                    <div class="col-lg-12">
                        <a href="" class="btn btn-register btn-outline-dark col-lg-12 mt-3" id="login"><i class="fas fa-lock"></i> Iniciar Sesión</a>
                    </div>
                </div>
            </form>

        </div>
    </div>
  </div>
  



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/swiper.js"></script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>