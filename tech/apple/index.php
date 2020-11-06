<?php 
    include '../../layout-sub/header.php';
?>

<div class="container mt-5 lineBottom">
    <h2 class="text-center"><i class="fab fa-apple"></i> Apple</h2>
    <p class="text-left mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium reiciendis cupiditate minima unde praesentium, inventore molestias aut aspernatur quo, molestiae, rem quae ipsum incidunt labore delectus cum dolor beatae repudiandae?. Lorem ipsum dolor sit amet consectetur adipisicing elit. Non veritatis omnis dicta fugiat nam eveniet labore dolores, neque voluptates tempora ut quis corrupti libero aliquam ea vel quisquam accusantium voluptas?</p>
</div>

<div class="container notes mt-5 lineBottom">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
                        <div class="col-md-4 col-sm-4 mb-4">
                            <img src="../../images/notes/netflix.jpg" alt="" class="h-200 w-100">
                        </div>
                        <div class="col-md-8 col-sm-8 lineBottom mb-4">
                            <a class="links" href="../../nota.php"><h3>Netflix is testing a ‘Shuffle’ button, because you’re tired of picking what to watch</h3></a>
                            <p>Por <a class="autorLink" href="">Ruben Castillo</a> | Agosto 21 | 12 Comentarios</p>
                        </div>

                        <div class="col-md-4 col-sm-4 mb-4">
                            <img src="../../images/notes/camera.jpg" alt="" class="h-200 w-100">
                        </div>
                        <div class="col-md-8 col-sm-8 lineBottom mb-4">
                            <a class="links" href=""><h3>It’s time to watch all the Ip Man movies</h3></a>
                            <p>Por <a class="autorLink" href="">Ruben Castillo</a> | Agosto 21 | 12 Comentarios</p>
                        </div>

                        <div class="col-md-4 col-sm-4 mb-4">
                            <img src="../../images/notes/netflix.jpg" alt="" class="h-200 w-100">
                        </div>
                        <div class="col-md-8 col-sm-8 lineBottom mb-4">
                            <a class="links" href=""><h3>It’s time to watch all the Ip Man movies</h3></a>
                            <p>Por <a class="autorLink" href="">Ruben Castillo</a> | Agosto 21 | 12 Comentarios</p>
                        </div>


                        
            </div>
        </div>
        <?php $publicaciones = obtenerAds('7',0,1); 
        if($publicaciones->num_rows) { 
        foreach($publicaciones as $publicacion) { ?>
        <div class="col-md-3 text-center d-sm-none d-md-block">
            <div class="publicidad text-center align-items-center justify-content-center">
            <a href="<?php echo $publicacion['link'] ?>" target="_blank">
              <img src="../../uploads/publ/<?php echo $publicacion['imagen'] ?>" class="h-100 w-100" alt="">
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

<?php 
    include '../../layout-sub/footer.php';
?>