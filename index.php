<?php 
  include './layout/header.php';
?>

<div class="container-fluid">
  <div class="row">

  <?php $publicaciones = obtenerPublicacionHeader(0,1); 
  if($publicaciones->num_rows) { 
  foreach($publicaciones as $publicacion) { ?>

    <div class="col-md-12 p-0">
        <div class="card bg-inverse">
          <img class="card-img image-cover" src="./uploads/files/<?php echo $publicacion['portada'] ?>" alt="Card image cap">
          <div class="card-img-overlay d-flex align-items-end">
            <div class="row title-back">
              <div class="col-md-12">
              <a href="./nota.php?id=<?php echo $publicacion['id'] ?>" class="card-title"><h1><?php echo $publicacion['titulo'] ?></h1></a>
              </div>
              <div class="col-md-12 autor-title">
                Por <a href="" class="autor-link"><?php echo $publicacion['editor'] ?></a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <?php } 
    } ?>

<?php $publicaciones = obtenerPublicacionHeader(1,1); 
  if($publicaciones->num_rows) { 
  foreach($publicaciones as $publicacion) { ?>

    <div class="col-md-6 p-0">
        <div class="card bg-inverse">
          <img class="card-img image-cover" src="./uploads/files/<?php echo $publicacion['portada'] ?>" alt="<?php echo $publicacion['portada'] ?>">
          <div class="card-img-overlay d-flex align-items-end">
            <div class="row title-back">
              <div class="col-md-12">
              <a href="./nota.php?id=<?php echo $publicacion['id'] ?>" class="card-title"><h1><?php echo $publicacion['titulo'] ?></h1></a>
              </div>
              <div class="col-md-12 autor-title">
                Por <a href="" class="autor-link"><?php echo $publicacion['editor'] ?></a>
              </div>
            </div>
          </div>
        </div>
    </div>

<?php } 
} ?>

<?php $publicaciones = obtenerPublicacionHeader(2,1); 
  if($publicaciones->num_rows) { 
  foreach($publicaciones as $publicacion) { ?>

    <div class="col-md-6 p-0">
        <div class="card bg-inverse">
          <img class="card-img image-cover" src="./uploads/files/<?php echo $publicacion['portada'] ?>" alt="Card image cap">
          <div class="card-img-overlay d-flex align-items-end">
            <div class="row title-back">
              <div class="col-md-12">
              <a href="./nota.php?id=<?php echo $publicacion['id'] ?>" class="card-title"><h1><?php echo $publicacion['titulo'] ?></h1></a>
              </div>
              <div class="col-md-12 autor-title">
                Por <a href="" class="autor-link"><?php echo $publicacion['editor'] ?></a>
              </div>
            </div>
          </div>
        </div>
    </div>

    <?php } 
} ?>

    
  </div>
</div>

<!-- notas -->


<?php $publicaciones = obtenerAds('2',0,1); 
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

<div class="container-fluid notes mt-5 lineBottom">
  <h2 class="text-center text-uppercase mb-5">Últimas Noticias</h2>
    <div class="row">
        <div class="col-md-9">
            <div class="row">
            <?php $publicaciones = obtenerUltimasPublicaciones(15); 
            if($publicaciones->num_rows) { 
            foreach($publicaciones as $publicacion) { ?>
                <div class="col-md-4 col-sm-4 mb-4">
                    <img src="./uploads/files/<?php echo $publicacion['portada'] ?>" alt="<?php echo $publicacion['portada'] ?>" class="h-200 w-100">
                </div>
                <div class="col-md-8 col-sm-8 lineBottom mb-4">
                    <a class="links" href="./nota.php?id=<?php echo $publicacion['id'] ?>"><h3><?php echo $publicacion['titulo'] ?></h3></a>
                    <p>Por <a class="autorLink" href=""><?php echo $publicacion['editor'] ?></a> | <?php $fechaNota = explode(',', $publicacion['fecha']); echo fechaMx(strval($publicacion['fecha'])) . ' ' . $fechaNota[1]; ?></p>
                </div>

            <?php } 
            } else {
                ?> 
                  <div class="container text-center justify-content-center mt-3 mb-3">
                    <h4 class="text-danger">No hay contenido para mostrar</h4>
                  </div>
                <?php
            } ?>

                <div class="text-center justify-content-center align-items-center mb-4 col-md-12">
                  <a href="./archives" class="btn btn-outline-info btn-more col-md-12">Más contenido</a>  
                </div>
            </div>
            
        </div>
        <?php $publicaciones = obtenerAds('3',0,1); 
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

<!-- fin notas -->

  <?php 
    include './layout/footer.php';
  ?>