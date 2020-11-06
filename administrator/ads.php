<?php 
    include 'layout/header.php';
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Nueva Publicidad</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Crear Nueva Publicidad</h3>
                                        </div>
                                        <hr>
                                        <form>
                                            <div class="row">
                                                <div class="form-group has-success col-md-12">
                                                    <label for="titulo" class="control-label mb-1">Título</label>
                                                    <input id="titulo" type="text" class="form-control">
                                                </div>
                                                <div class="form-group has-success col-md-12 mb-4">
                                                    <label for="cover-input" class=" form-control-label">Imagen</label>
                                                    <input type="file" id="cover-input" class="form-control-file">
                                                </div>
                                                <div class="form-group has-success col-md-12">
                                                    <label for="description" class="control-label mb-1">Descripción</label>
                                                    <input id="description" type="text" class="form-control">
                                                </div>
                                                <div class="form-group has-success col-md-12">
                                                    <label for="link" class="control-label mb-1">Link</label>
                                                    <input id="link" type="text" class="form-control">
                                                </div>
                                                <div class="form-group has-success col-md-12">
                                                <label for="categoria" class=" form-control-label">Ubicación</label>
                                                    <select id="categoria" class="form-control">
                                                    <option value="">Seleccionar</option>
                                                    <option value="1">Principal 1</option>
                                                    <option value="2">Principal 2</option>
                                                    <option value="4">Principal Aside</option>
                                                    <option value="5">Notas 1</option>
                                                    <option value="6">Notas Aside</option>
                                                    <option value="7">Categorias 1</option>
                                                    <option value="8">Categorias Aside</option>
                                                    </select>
                                            </div>
                                            </div>
                                            
                                            <div class="form-group has-success col-md-12">
                                                <button id="new-publication" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-check fa-lg"></i>&nbsp;
                                                    <span>Publicar</span>
                                                </button>
                                            </div>
                                            
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>  
                            
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30 text-center">
                                    <table class="table table-borderless table-striped table-earning listado-publicaciones">
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