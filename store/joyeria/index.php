<?php 
  include '../../layout-sub/header-store.php';
?>



<!-- ultimos productos -->

<div class="container-fluid mt-5 mb-5">
  <h2 class="text-center mt-3 mb-4 text-uppercase">Joyería de plata</h2>
  <div class="row">

  <div class="col-md-4"> <!-- inicio col-md-3 -->
      <a href="" class="link-categoria">
        <div class="card product-card">
          <!-- carousel productos -->

          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
              <div class="carousel-item active carousel-prouct">
                <img src="../../images/play.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item carousel-prouct">
                <img src="../images/taza.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item carousel-prouct">
                <img src="../images/anillo.jpg" class="d-block w-100" alt="...">
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
          <img src="../images/ssd.jpg" class="card-img-top" alt="...">
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
          <img src="../images/ssd.jpg" class="card-img-top" alt="...">
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
    include '../../layout-sub/footer-store.php';
  ?>