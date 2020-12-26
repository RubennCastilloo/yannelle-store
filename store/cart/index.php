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
            <a class="nav-link" href="../" id="inicio">INICIO <span class="sr-only">(current)</span></a>
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
            <a class="nav-link" href="../cart" id="">
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
          <a class="nav-link" href="../register" id="">
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


<div class="container mt-4">
    <h2>Carrito de Compras</h2>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <div class="col-md-12 mb-3">
                  <div class="row">
                    <div class="col-md-2">
                        <img src="../../images/tech.png" alt="" class="w-100 img-cart"> 
                    </div>
                    <div class="col-md-8">
                        <div class="item-title p-0 m-0">Broquel de plata fina para regalo</div>
                        <p class="item-short-description mt-2">Taza roja con logo personalizado lore</p>
                        <h3 class="resultado-proceder">$500</h3>
                    </div>
                    <div class="col-md-2">
                        <div class="row text-center">
                        <select name="" id="" class="p-2 col-md-6 mb-3 ">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        </select> 
                        <div class="col-md-6 mb-3">
                          <button class="btn btn-outline-dark btn-proceder">
                             X
                          </button>
                        </div>
                        </div>
                    </div> <!-- fin cols -->
                  </div> <!-- fin row -->
                </div> <!-- fin col-md-12 -->
                <div class="col-md-12 mb-3">
                  <div class="row">
                    <div class="col-md-2">
                        <img src="../../images/tech.png" alt="" class="w-100 img-cart"> 
                    </div>
                    <div class="col-md-8">
                        <div class="item-title p-0 m-0">Broquel de plata fina para regalo</div>
                        <p class="item-short-description mt-2">Taza roja con logo personalizado lore</p>
                        <h3 class="resultado-proceder">$500</h3>
                    </div>
                    <div class="col-md-2">
                        <div class="row text-center">
                        <select name="" id="" class="p-2 col-md-6 mb-3 ">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        </select> 
                        <div class="col-md-6 mb-3">
                          <button class="btn btn-outline-dark btn-proceder">
                             X
                          </button>
                        </div>
                        </div>
                    </div> <!-- fin cols -->
                  </div> <!-- fin row -->
                </div> <!-- fin col-md-12 -->
                <div class="col-md-12 mb-3">
                  <div class="row">
                    <div class="col-md-2">
                        <img src="../../images/tech.png" alt="" class="w-100 img-cart"> 
                    </div>
                    <div class="col-md-8">
                        <div class="item-title p-0 m-0">Broquel de plata fina para regalo</div>
                        <p class="item-short-description mt-2">Taza roja con logo personalizado lore</p>
                        <h3 class="resultado-proceder">$500</h3>
                    </div>
                    <div class="col-md-2">
                        <div class="row text-center">
                        <select name="" id="" class="p-2 col-md-6 mb-3 ">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        </select> 
                        <div class="col-md-6 mb-3">
                          <button class="btn btn-outline-dark btn-proceder">
                             X
                          </button>
                        </div>
                        </div>
                    </div> <!-- fin cols -->
                  </div> <!-- fin row -->
                </div> <!-- fin col-md-12 -->
            </div> <!-- fin row -->
        </div>  <!-- fin col-md -->

        <div class="col-md-4 mt-4">
            <div class="container text-center">
                <h3>Resume de tu pedido</h3>
                <hr>
                <div class="row mb-2">
                  <div class="col-md-6 mb-2">
                    Subtotal
                  </div>
                  <div class="col-md-6 mb-2">
                    <span class="resultado-proceder">$500</span>
                  </div>
                </div>
                <!-- fin row -->
                <div class="row mb-2">
                  <div class="col-md-6 mb-2">
                    Envío
                  </div>
                  <div class="col-md-6 mb-2">
                    <span class="resultado-proceder">Gratis</span>
                  </div>
                </div>
                <!-- fin row -->
                <div class="row mb-2">
                  <div class="col-md-6 mb-2">
                    Total
                  </div>
                  <div class="col-md-6 mb-2">
                    <span class="resultado-proceder">$500</span>
                  </div>
                </div>
                <!-- fin row -->
                <hr>
                <div class="row mt-3 mb-2">
                  <div class="col-md-12 mb-2">
                    Cupón
                  </div>
                  <div class="col-md-6 mb-2 p-0">
                    <input type="text" placeholder="Cupón de descuento" class="form-control form-email" placeholder="correo@correo.com" aria-label="Small">
                  </div>
                  <div class="col-md-6 mb-2 p-0 ml-0 mr-0">
                    <button class="btn btn-outline-dark btn-proceder">
                      <i class="fas fa-cut"></i> Aplicar
                    </button>
                  </div>
                </div>
                <!-- fin row -->
                <hr>
                <div class="row mt-3 mb-2 text-center justify-content-center align-items-center">
                  <div class="col-md-12">
                    <a href="../purchase" class="btn btn-outline-dark btn-proceder">
                      <i class="fas fa-money-check-alt"></i> Proceder a la compra
                    </a>
                  </div>
                </div>
                <!-- fin row -->
            </div>
        </div> <!-- fin col-md -->
    </div>
   
    
</div>


<?php 
    include '../../layout/footer-store.php';
?>