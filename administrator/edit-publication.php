<?php 
    include 'layout/header.php';

    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

     if(!$id) {
          die('No es válido');
     }

     $resultado = obtenerPublicacion($id);
     $publicacion = $resultado->fetch_assoc();
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Editar Publicación</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Editar Publicación</h3>
                                        </div>
                                        <hr>
                                        <form>
                                            <div class="row">
                                                <div class="form-group has-success col-md-12">
                                                    <label for="titulo" class="control-label mb-1">Título</label>
                                                    <input id="titulo" type="text" class="form-control" value="<?php echo ($publicacion['titulo']) ? $publicacion['titulo'] : '';  ?>">
                                                </div>
                                                <div class="form-group has-success col-md-12">
                                                    <label for="subtitulo" class="control-label mb-1">Subtítulo</label>
                                                    <input id="subtitulo" type="text" class="form-control" value="<?php echo ($publicacion['subtitulo']) ? $publicacion['subtitulo'] : '';  ?>">
                                                </div>
                                                <div class="form-group col-md-12 mb-4 text-center">
                                                    <label class=" form-control-label">Actual foto de portada</label>
                                                    <div class="col-12 col-md-12">
                                                        <img class="text-center align-items-center justify-content-center" src="../uploads/files/<?php echo ($publicacion['portada']) ? $publicacion['portada'] : '';  ?>" alt="">
                                                    </div>
                                                </div>
                                                <div class="form-group has-success col-md-12 mb-4">
                                                    <label for="file-input" class=" form-control-label">Actualizar Portada</label>
                                                    <input type="file" id="update-cover" class="form-control-file">
                                                </div>
                                                <div class="form-group has-success col-md-12">
                                                    <input id="trix-editor" type="hidden" value="<?php echo ($publicacion['contenido']) ? $publicacion['contenido'] : '';  ?>"/>
                                                    <trix-editor input="trix-editor" id="contenido" ></trix-editor>
                                                </div>
                                                <div class="form-group has-success col-md-12">
                                                <label for="categoria" class=" form-control-label">Categoría</label>
                                                    <select id="categoria" class="form-control">
                                                    <option value="">Seleccionar</option>
                                                    <option value="tech" <?php if($publicacion['categoria'] == 'tech') { ?> selected="selected"<?php } ?>>Tech</option>
                                                    <option value="entretenimiento" <?php if($publicacion['categoria'] == 'entretenimiento') { ?> selected="selected"<?php } ?>>Entretenimiento</option>
                                                    </select>
                                            </div>
                                            <div class="form-group has-success col-md-12">
                                                <label for="subcategoria" class=" form-control-label">Subcategoría</label>
                                                    <select id="subcategoria" class="form-control text-capitalize">
                                                    <option value="<?php echo ($publicacion['subcategoria']) ? $publicacion['subcategoria'] : '';  ?>"><?php echo ($publicacion['subcategoria']) ? $publicacion['subcategoria'] : '';  ?></option>
                                                    </select>
                                            </div>
                                                <div class="form-group has-success col-md-12">
                                                    <input type="hidden" id="id-publication" value="<?php echo ($publicacion['id']) ? $publicacion['id'] : '';  ?>">
                                                    <input type="hidden" id="cover-name" value="<?php echo ($publicacion['portada']) ? $publicacion['portada'] : '';  ?>">
                                                    <button id="edit-publication" type="submit" class="btn btn-lg btn-info btn-block">
                                                        <i class="fa fa-edit fa-lg"></i>&nbsp;
                                                        <span>Editar</span>
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