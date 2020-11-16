<?php 
    include 'layout/header.php';
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Crear descripción de categoría</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Crear Nueva Descripción</h3>
                                        </div>
                                        <hr>
                                        <form>
                                            <div class="row">
                                            <div class="form-group has-success col-md-12">
                                                <label for="categoria" class=" form-control-label">Categoría</label>
                                                    <select id="categoria" class="form-control" autofocus>
                                                    <option value="">Seleccionar</option>
                                                    <option value="tech">Tech</option>
                                                    <option value="entretenimiento">Entretenimiento</option>
                                                    <option value="ciencia">Ciencia</option>
                                                    </select>
                                            </div>
                                            <div class="form-group has-success col-md-12">
                                                <label for="subcategoria" class=" form-control-label">Subcategoría</label>
                                                    <select id="subcategoria" class="form-control">
                                                    <option value="">No hay valores</option>
                                                    </select>
                                            </div>
                                            <div class="form-group has-success col-md-12">
                                                <label for="description" class=" form-control-label">Descripción</label>
                                                <input id="trix-editor" type="hidden" name="content"/>
                                                <trix-editor input="trix-editor" class="trix-content" id="contenido" autofocus contenteditable role="textbox"></trix-editor>
                                            </div>
                                            
                                            <div class="form-group has-success col-md-12">
                                                <button id="new-description" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-check fa-lg"></i>&nbsp;
                                                    <span>Publicar descripción</span>
                                                </button>
                                            </div>
                                            
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>  
                            
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30 text-center">
                                    <table class="table table-borderless table-striped table-earning listado-descripciones">
                                        <thead>
                                            <tr>
                                                <th>Categoría</th>
                                                <th>Subcategoría</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody id="description-table">
                                        <?php $descripciones = obtenerDescripciones(); 
                                        if($descripciones->num_rows) { 
                                        foreach($descripciones as $descripcion) { ?>
                                            <tr class="text-uppercase">
                                                <td><?php echo $descripcion['categoria'] ?></td>
                                                <td><?php echo $descripcion['subcategoria'] ?></td>
                                                <td>
                                                    <a href="edit-description.php?id=<?php echo $descripcion['id'] ?>" class="btn btn-sm btn-info">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <input type="hidden" name="" value="<?php echo $descripcion['portada'] ?>" id="file-name">
                                                    <button class="btn btn-sm btn-danger delete-description" data-id="<?php echo $descripcion['id'] ?>">
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