<?php
include 'layout/header.php';
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th>Editor</th>
                                    <th>Fecha</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="publications-table">
                            <?php $publicaciones = obtenerPublicaciones(); 
                            if($publicaciones->num_rows) { 
                            foreach($publicaciones as $publicacion) { ?>
                                <tr>
                                    <td><?php echo $publicacion['titulo'] ?></td>
                                    <td><?php echo $publicacion['editor'] ?></td>
                                    <td><?php echo $publicacion['fecha'] ?></td>
                                    <td>
                                        <a href="edit-publication.php?id=<?php echo $publicacion['id'] ?>" class="btn btn-sm btn-info">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <input type="hidden" name="" value="<?php echo $publicacion['portada'] ?>" id="file-name">
                                        <button class="btn btn-sm btn-danger delete-publication" data-id="<?php echo $publicacion['id'] ?>">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>

                                <?php } 
                            } else {
                                ?> 
                                    <td colspan="4" class="text-center">
                                        <h4 class="text-danger">No hay contenido para mostrar</h4>
                                    </td>
                                <?php
                            } ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include 'layout/footer.php';
?>