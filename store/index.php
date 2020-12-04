<?php 
  include '../layout/header-store.php';
?>

  <div class="container-fluid carousel-store">
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../images/play.jpg" class="d-block w-100 h-0" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="text-left">First slide label</h5>
          <p class="text-left">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../images/play.jpg" class="d-block w-100 h-0" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="../images/play.jpg" class="d-block w-100 h-0" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div> <!-- fin container-->

<!-- informacion principal -->

<div class="container-fluid principal-info mt-5 mb-5">
  <div class="row text-center">
    <div class="col-md-4">
      <span class="material-icons icon-principal">
      star
      </span>
      <h4>Los mejores productos</h4>
    </div>
    <div class="col-md-4 middle-text">
      <span class="material-icons icon-principal">
      local_shipping
      </span>
      <h4>Envios a toda la republica</h4>
      
    </div>
    <div class="col-md-4">
      <span class="material-icons icon-principal">
      verified_user
      </span>
      <h4>Compras seguras</h4>
    </div>
  </div>
</div>

<!-- fin informacion principal -->

<!-- productos -->

<div class="container-fluid mt-5 mb-5">
  <h2 class="text-center mt-3 mb-4 text-uppercase">Productos que ofrecemos</h2>
  <div class="row text-center">
    <div class="col-md-3">
      <a href="" class="link-categoria">
        <div class="card">
          <img src="./images/taza.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="card-text text">Tazas</h2>
          </div>
        </div>
      </a>
    </div> <!-- col-md-6 -->

    <div class="col-md-3">
      <a href="" class="link-categoria">
        <div class="card">
          <img src="./images/anillo.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="card-text">Joyeria</h2>
          </div>
        </div>
      </a>
    </div> <!-- col-md-6 -->

    <div class="col-md-3">
      <a href="" class="link-categoria">
        <div class="card">
          <img src="./images/sueter.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="card-text">Camisas</h2>
          </div>
        </div>
      </a>
    </div> <!-- col-md-6 -->

    <div class="col-md-3">
      <a href="" class="link-categoria">
        <div class="card">
          <img src="./images/ssd.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="card-text">Tecnologia</h2>
          </div>
        </div>
      </a>
    </div> <!-- col-md-6 -->
  </div>
</div>

<!-- fin productos -->

<!-- ultimos productos -->

<div class="container-fluid mt-5 mb-5">
  <h2 class="text-center mt-3 mb-4 text-uppercase">Ultimos lanzamientos</h2>
  <div class="row">

  <div class="col-md-4"> <!-- inicio col-md-3 -->
      <a href="" class="link-categoria">
        <div class="card product-card">
          <!-- carousel productos -->

          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active carousel-prouct">
                <img src="../images/play.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item carousel-prouct">
                <img src="./images/taza.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item carousel-prouct">
                <img src="./images/anillo.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <!-- fin carousel productos -->
          <div class="card-body">
            <h2 class="card-text text-center">Taza Yannelle</h2>
            <p class="price text-center">$500</p>
            <div class="text-card">
              <p>Suscríbete ipsum dolor sit amet consectetur adipisicing elit. Modi iste, culpa asperiores fuga aliquid maxime consequatur cumque quis quia autem laborum porro aperiam delectus atque totam blanditiis expedita ducimus debitis.</p>
            </div>
            <div class="text-center">
              <button href="" class="btn btn-outline-success button-purchase">
                <span class="material-icons">
                add_shopping_cart
                </span>  
                Comprar
            </button>
            </div>
          </div>
        </div>
      </a>
    </div> <!-- col-md-3 -->

    <div class="col-md-4"> <!-- inicio col-md-3 -->
      <a href="" class="link-categoria">
        <div class="card product-card">
          <img src="./images/ssd.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="card-text text-center">Taza Yannelle</h2>
            <p class="price text-center">$500</p>
            <div class="text-card">
              <p>Suscríbete ipsum dolor sit amet consectetur adipisicing elit. Modi iste, culpa asperiores fuga aliquid maxime consequatur cumque quis quia autem laborum porro aperiam delectus atque totam blanditiis expedita ducimus debitis.</p>
            </div>
            <div class="text-center">
              <button href="" class="btn btn-outline-success button-purchase">
                <span class="material-icons">
                add_shopping_cart
                </span>  
                Comprar
            </button>
            </div>
          </div>
        </div>
      </a>
    </div> <!-- col-md-3 -->

    <div class="col-md-4"> <!-- inicio col-md-3 -->
      <a href="" class="link-categoria">
        <div class="card product-card">
          <img src="./images/ssd.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h2 class="card-text text-center">Taza Yannelle</h2>
            <p class="price text-center">$500</p>
            <div class="text-card">
              <p>Suscríbete ipsum dolor sit amet consectetur adipisicing elit. Modi iste, culpa asperiores fuga aliquid maxime consequatur cumque quis quia autem laborum porro aperiam delectus atque totam blanditiis expedita ducimus debitis.</p>
            </div>
            <div class="text-center">
              <button href="" class="btn btn-outline-success button-purchase">
                <span class="material-icons">
                add_shopping_cart
                </span>  
                Comprar
            </button>
            </div>
          </div>
        </div>
      </a>
    </div> <!-- col-md-3 -->
    
  </div>
</div>

<!-- fin ultimos productos -->


  <script>
      $('.carousel').carousel('pause');
  </script>
  <?php 
    include '../layout/footer-store.php';
  ?>