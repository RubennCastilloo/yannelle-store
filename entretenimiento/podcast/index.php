<?php 
    if (!$_GET) {
        header('Location: ?pagina=1');
    }



    include '../../layout-sub/header.php';
    $resultado = obtenerPublicacionesCategorias('entretenimiento', 'podcast');
    $total_registros = $resultado->num_rows;
    $articulos_por_pagina = 10;
    $paginas = ceil($total_registros / $articulos_por_pagina);

    if ($resultado->num_rows) {
        if($_GET['pagina'] > $paginas || $_GET['pagina'] <= 0 ) {
            header('Location: ?pagina=1');
        }
    }

  
  

  $iniciar = ($_GET['pagina'] -1) * $articulos_por_pagina;
?>

<div class="container mt-5 lineBottom">
    <h2 class="text-center"><i class="fas fa-podcast"></i> Podcast</h2>
    <p class="text-left mb-5">
        <?php 
        $descripciones = obtenerDescripcionCategoria('entretenimiento', 'podcast'); 
        if($descripciones->num_rows) { 
        foreach($descripciones as $descripcion) { ?>
        <p class="text-left mb-5"><?php echo $descripcion['descripcion'] ?></p>
        <?php } 
        } else {
        ?> 
        
            <div class="text-center align-items-center justify-content-center">
                Pronto prepararemos una gran descripción
            </div>
        <?php
        } ?>
    </p>
</div>

<div class="container-fluid notes mt-5 lineBottom">
    <div class="row">
        <div class="col-md-9">
            <div class="row">
            <?php $publicaciones = obtenerPublicacionesSubcategoriaPaginadas('entretenimiento', 'podcast', $iniciar, $articulos_por_pagina); 
            if($publicaciones->num_rows) { 
            foreach($publicaciones as $publicacion) { ?>

                <div class="col-md-4 col-sm-4 mb-4">
                    <img src="../../uploads/files/<?php echo $publicacion['portada'] ?>" alt="<?php echo $publicacion['portada'] ?>" class="h-200 w-100">
                </div>
                <div class="col-md-8 col-sm-8 lineBottom mb-4">
                    <a class="links" href="../../nota.php?id=<?php echo $publicacion['id'] ?>"><h3><?php echo $publicacion['titulo'] ?></h3></a>
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
                
        <?php    } else {
                ?> 
                  <h4 class="container text-danger mt-3 mb-5 text-center">De momento no hay contenido para mostrar</h4>
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