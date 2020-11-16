<?php 
    include 'layout/header.php';
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

     if(!$id) {
          die('No es válido');
     }

     $resultado = obtenerDescripcion($id);
     $descripcion = $resultado->fetch_assoc();
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Editar descripción de categoría</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Editar Descripción</h3>
                                        </div>
                                        <hr>
                                        <form>
                                            <div class="row">
                                            <div class="form-group has-success col-md-12">
                                                <label for="categoria" class=" form-control-label">Categoría</label>
                                                    <select id="categoria" class="form-control" autofocus>
                                                    <option value="">Seleccionar</option>
                                                    <option value="tech" <?php if($descripcion['categoria'] == 'tech') { ?> selected="selected"<?php } ?>>Tech</option>
                                                    <option value="entretenimiento" <?php if($descripcion['categoria'] == 'entretenimiento') { ?> selected="selected"<?php } ?>>Entretenimiento</option>
                                                    <option value="ciencia" <?php if($publicacion['categoria'] == 'ciencia') { ?> selected="selected"<?php } ?>>Ciencia</option>
                                                    </select>
                                            </div>
                                            <div class="form-group has-success col-md-12">
                                                <label for="subcategoria" class=" form-control-label">Subcategoría</label>
                                                    <select id="subcategoria" class="form-control text-capitalize">
                                                    <option value="<?php echo ($descripcion['subcategoria']) ? $descripcion['subcategoria'] : '';  ?>"><?php echo ($descripcion['subcategoria']) ? $descripcion['subcategoria'] : '';  ?></option>
                                                    </select>
                                            </div>
                                            <div class="form-group has-success col-md-12">
                                                <label for="description" class=" form-control-label">Descripción</label>
                                                <input id="trix-editor" type="hidden" name="content" value=""/>
                                                <trix-editor input="trix-editor" class="trix-content" id="contenido" contenteditable role="textbox"><?php echo ($descripcion['descripcion']) ? $descripcion['descripcion'] : '';  ?></trix-editor>
                                            </div>
                                            
                                            <div class="form-group has-success col-md-12">
                                                <input type="hidden" value="<?php echo $id; ?>" id="id-description">
                                                <button id="edit-description" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-check fa-lg"></i>&nbsp;
                                                    <span>Editar descripción</span>
                                                </button>
                                            </div>
                                            
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>  

            </div>
        </div>
    </div>

</div>



<?php 
    include 'layout/footer.php';
?>