<?php 
  include '../../layout-sub/header-store.php';
?>

<div class="container">
  <div class="row text-center">
    <div class="col-md-8">
      <h1 class="mb-3">Taza Yannelle</h1>
         <div class="row">
           <div class="col-md-12">
             <!-- carousel productos -->

         <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
              <div class="carousel-item active carousel-prouct">
                <img src="../images/sueter.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item carousel-prouct">
                <img src="../images/taza.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item carousel-prouct">
                <img src="../images/anillo.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <span class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </span>
            <span class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </span>
          </div>

          <!-- fin carousel productos -->
           </div>
           <div class="col-md-12 text-left mt-4">
              <h2>Características destacadas</h2>
             Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate perferendis dolorem repellendus, doloremque illum, asperiores veniam officia voluptatum quis totam quae fugiat perspiciatis libero praesentium, suscipit quod exercitationem animi inventore.
           </div>
         </div>
    </div>
    <div class="col-md-4">
      <p class="price">$500</p>
      <br>
      <button class="btn btn-outline-success btn-register"><i class="fas fa-shopping-bag"></i> Comprar producto</button>
    </div>
  </div>
</div>


  <script>
      $('.carousel').carousel('pause');
  </script>
  <?php 
    include '../../layout-sub/footer-store.php';
  ?>