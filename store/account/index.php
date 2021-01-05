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


<section class="user-account">
        <div class="row">
            <div class="col-md-4">
                <ul class="mt-5 lista-datos">
                    <li>
                        <button class="btn btn-data btn-data-selected" id="personal-data"><i class="fas fa-user-shield"></i> Mis Datos Personales</button>
                    </li>
                    <li>
                        <button class="btn  btn-data" id="invoice-data"><i class="fas fa-file-invoice-dollar"></i> Mis Datos de Facturación</button>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li>
                        <button class="btn btn-data" id="shipping-data"><i class="fas fa-truck"></i> Mis Pedidos</button>
                    </li>
                    <div class="dropdown-divider"></div>
                    <li>
                        <a class="btn btn-data" href="../login/index.php?cerrar_sesion=true"><i class="fas fa-power-off"></i> Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-8">

               <section class="datos-personales container">
               <form id="personal-data-form">
                    <div class="text-uppercase mt-4">
                        <small><i class="fas fa-user-shield"></i> Datos</small>
                            <h2>Personales</h2>
                        <hr class="divider my-4 text-warning">
                    </div>
                        <div class="form-row mt-3">
                            <div class="col-lg-5 mb-3">
                                Nombre(s):
                                <input class="form-control" type="text" placeholder="Nombre(s) " id="nombres">
                            </div>
                            <div class="col-lg-5 mb-3">
                                Apellidos:
                                <input class="form-control" type="text" placeholder="Apellidos " id="apellidos">
                            </div> 
                           <div class="col-lg-5 mb-3">
                                Email:
                                <input class="form-control" type="email" placeholder="Email " id="email">
                            </div>
                            <div class="col-lg-5 mb-3">
                                Estado:
                            <select name="estados" class="custom-select" id="estado">

                                <option value="Chihuahua">Chihuahua</option>

                                <option value="Aguascalientes">Aguascalientes</option>

                                <option value="Baja California">Baja California</option>

                                <option value="Baja California Sur">Baja California Sur</option>

                                <option value="Campeche">Campeche</option>

                                <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>

                                <option value="Colima">Colima</option>

                                <option value="Chiapas">Chiapas</option>

                                <option value="Chihuahua">Chihuahua</option>

                                <option value="Distrito Federal">Distrito Federal</option>

                                <option value="Durango">Durango</option>

                                <option value="Guanajuato">Guanajuato</option>

                                <option value="Guerrero">Guerrero</option>

                                <option value="Hidalgo">Hidalgo</option>

                                <option value="Jalisco">Jalisco</option>

                                <option value="México">México</option>

                                <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>

                                <option value="Morelos">Morelos</option>

                                <option value="Nayarit">Nayarit</option>

                                <option value="Nuevo León">Nuevo León</option>

                                <option value="Oaxaca">Oaxaca</option>

                                <option value="2Puebla1">Puebla</option>

                                <option value="Querétaro">Querétaro</option>

                                <option value="Quintana Roo">Quintana Roo</option>

                                <option value="San Luis Potosí">San Luis Potosí</option>

                                <option value="Sinaloa">Sinaloa</option>

                                <option value="Sonora">Sonora</option>

                                <option value="Tabasco">Tabasco</option>

                                <option value="Tamaulipas">Tamaulipas</option>

                                <option value="Tlaxcala">Tlaxcala</option>

                                <option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>

                                <option value="Yucatán">Yucatán</option>

                                <option value="Zacatecas">Zacatecas</option>

                                </select>
                            </div>
                            <div class="col-lg-5 mb-3">
                                Municipio:
                                <input class="form-control" type="text" placeholder="Municipio " id="municipio">
                            </div>
                            <div class="col-lg-5 mb-3">
                                Colonia:
                                <input class="form-control" type="text" placeholder="Colonia " id="colonia">
                            </div>
                            <div class="col-lg-5 mb-3">
                                Calle:
                                <input class="form-control" type="text" placeholder="Calle " id="calle">
                            </div>
                            <div class="col-lg-5 mb-3">
                                No. Exterior:
                                <input class="form-control" type="number" placeholder="No. Interior " id="exterior">
                            </div>
                            <div class="col-lg-5 mb-3">
                                No. Interior (Opcional):
                                <input class="form-control" type="number" placeholder="No. Exterior " id="interior">
                            </div>
                            <div class="col-lg-5 mb-3">
                                Codigo Postal:
                                <input class="form-control" type="text" placeholder="CP " id="cp">
                            </div>
                            <div class="col-lg-5 mb-3">
                                    Actualizar Password:
                                <input class="form-control" type="password" placeholder="Actualizar Password " id="password">
                            </div>
                            <div class="col-lg-5 mb-3">
                                    Confirmar Password:
                                <input class="form-control" type="password" placeholder="Confirmar Password " id="passwordConfirm">
                            </div>
                            <div class="col-lg-10 mb-3">
                                Instrucciones Especiales:
                                <textarea class="form-control" placeholder="Instrucciones" id="instrucciones" ></textarea>
                            </div>
                            <div class="col-lg-10">
                                <input type="hidden" id="usr" value="9" />
                                <a href="" class="btn btn-raiv btn-register btn-success col-lg-12 mt-3" id="update-personal-data"><i class="fas fa-lock"></i> Actualizar Datos</a>
                            </div>
                        </div>
                    </form>
               </section>
               <section class="datos-facturacion container d-none">
               <form>
                        <div class="text-uppercase mt-4">
                            <small><i class="fas fa-file-invoice-dollar"></i> Datos</small>
                                <h2>de facturacion</h2>
                            <hr class="divider my-4 text-warning">
                        </div>
                        <div class="form-row mt-3">
                            <div class="col-lg-5 mb-3">
                                Razon Social:
                                <input class="form-control" type="text" placeholder="Razon Social " id="razon-social" value="">
                            </div>
                            <div class="col-lg-5 mb-3">
                                RFC:
                                <input class="form-control" type="text" placeholder="RFC " id="rfc" value="">
                            </div>
                            <div class="col-lg-5 mb-3">
                                Estado:
                            <select name="estados" class="custom-select" id="estado-invoice">

                            <option value="Chihuahua">Chihuahua</option>

                                <option value="Aguascalientes">Aguascalientes</option>

                                <option value="Baja California">Baja California</option>

                                <option value="Baja California Sur">Baja California Sur</option>

                                <option value="Campeche">Campeche</option>

                                <option value="Coahuila de Zaragoza">Coahuila de Zaragoza</option>

                                <option value="Colima">Colima</option>

                                <option value="Chiapas">Chiapas</option>

                                <option value="Chihuahua">Chihuahua</option>

                                <option value="Distrito Federal">Distrito Federal</option>

                                <option value="Durango">Durango</option>

                                <option value="Guanajuato">Guanajuato</option>

                                <option value="Guerrero">Guerrero</option>

                                <option value="Hidalgo">Hidalgo</option>

                                <option value="Jalisco">Jalisco</option>

                                <option value="México">México</option>

                                <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>

                                <option value="Morelos">Morelos</option>

                                <option value="Nayarit">Nayarit</option>

                                <option value="Nuevo León">Nuevo León</option>

                                <option value="Oaxaca">Oaxaca</option>

                                <option value="2Puebla1">Puebla</option>

                                <option value="Querétaro">Querétaro</option>

                                <option value="Quintana Roo">Quintana Roo</option>

                                <option value="San Luis Potosí">San Luis Potosí</option>

                                <option value="Sinaloa">Sinaloa</option>

                                <option value="Sonora">Sonora</option>

                                <option value="Tabasco">Tabasco</option>

                                <option value="Tamaulipas">Tamaulipas</option>

                                <option value="Tlaxcala">Tlaxcala</option>

                                <option value="Veracruz de Ignacio de la Llave">Veracruz de Ignacio de la Llave</option>

                                <option value="Yucatán">Yucatán</option>

                                <option value="Zacatecas">Zacatecas</option>

                                </select>
                            </div>
                            <div class="col-lg-5 mb-3">
                                Municipio:
                                <input class="form-control" type="text" placeholder="Municipio " id="municipio-invoice" value="">
                            </div>
                            <div class="col-lg-5 mb-3">
                                Direccion Fiscal:
                                <input class="form-control" type="text" placeholder="Direccion " id="direccion-fiscal" value="">
                            </div>
                            <div class="col-lg-5 mb-3">
                                CP:
                                <input class="form-control" type="text" placeholder="CP" id="cp-invoice" value="" maxlength="5" onKeyPress="return soloNumeros(event)">
                            </div>
                            <div class="col-lg-5 mb-3">
                                Email: <span id="emailOK"></span>
                                <input class="form-control" type="email" placeholder="Email" id="email-invoice" value="">
                            </div>
                            <div class="col-lg-5 mb-3">
                                Telefono:
                                <input class="form-control" type="tel" placeholder="Telefono" id="telefono-invoice" value="" onKeyPress="return soloNumeros(event)">
                            </div>
                            <div class="col-lg-10">
                                <input type="hidden" id="usr-invoice" value="" />
                                <a href="" class="btn btn-raiv btn-register btn-success col-lg-12 mt-3" 
                                                                id="updateInvoiceData"
                                 ><i class="fas fa-lock"></i>                                 Actualizar
                                 Datos</a>
                            </div>
                        </div>
                    </form>
               </section>
               <section class="mis-pedidos container d-none">
               <form>
               <div class="text-uppercase mt-4">
                        <small><i class="fas fa-truck"></i> Mis</small>
                            <h2>Pedidos</h2>
                        <hr class="divider my-4 text-warning">
                    </div>
                   <div class="form-row mt-3">
                        <div class="col-lg-10 mb-3">
                        <table class="table table-hover tabla-pedidos table-sm text-center table-responsive">
                            <thead>
                                <tr>
                                <th scope="col">No. Orden</th>
                                <th scope="col">Nombre Articulo</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Estado</th>
                                
                                </tr>
                            </thead>
                            <tbody>                           

                            </tbody>
                        </table>
                        </div>
                        <div class="col-lg-10">
                            <a href="../" class="btn btn-raiv btn-register btn-success col-lg-12 mt-3"><i class="fas fa-store-alt"></i> Ir a Tienda</a>
                        </div>
                    </div>
                    </form>
               </section>
            </div>
        </div>
    </section>

<?php 
    include '../../layout/footer-store.php';
?>