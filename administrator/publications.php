<?php 
    include 'layout/header.php';
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Nueva Publicación</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Crear Nueva Publicación</h3>
                                        </div>
                                        <hr>
                                        <form>
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <label for="titulo" class="control-label mb-1">Título</label>
                                                    <input id="titulo" type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="subtitulo" class="control-label mb-1">Subtítulo</label>
                                                    <input id="subtitulo" type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-12 mb-4">
                                                    <label for="cover-input" class=" form-control-label">Portada</label>
                                                    <input type="file" id="cover-input" class="form-control-file">
                                                </div>
                                                <div class="form-group col-md-12 mb-4 subir-archivos">
                                                    <label for="link-input" class=" form-control-label">Subir Archivos (Obtener link)</label>
                                                    <input type="file" id="link-input" class="form-control-file">

                                                    <button id="upload-files" type="submit" class="btn btn-sm btn-success btn-block p-2 mt-3">
                                                        <i class="fa fa-upload fa-lg"></i>&nbsp;
                                                        <span class="fa-lg">Subir</span>
                                                    </button>

                                                <div class="archivos-subidos mt-3">
                                                    <div class="table-responsive table--no-card m-b-30 text-center">
                                                        <table class="table table-borderless table-striped table-earning listado-archivos">
                                                            <thead>
                                                                <tr>
                                                                    <th>URL</th>
                                                                    <th>Copiar</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody id="files-table">
                                                                
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="form-group has-success col-md-12">
                                                <input id="trix-editor" type="hidden" name="content"/>
                                                <trix-editor input="trix-editor" class="trix-content" id="contenido" contenteditable role="textbox"></trix-editor>
                                            </div>
                                            <div class="form-group has-success col-md-12">
                                                <label for="categoria" class=" form-control-label">Categoría</label>
                                                    <select id="categoria" class="form-control">
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
                                                <input type="hidden" name="" value="<?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido'] ?>" id="editor">
                                                <input type="hidden" name="" value="<?php echo $_SESSION['twitter']?>" id="twitter">
                                                <input type="hidden" name="" value="<?php echo $_SESSION['link_twitter']?>" id="link_twitter">
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
                                                <td class="text-left"><?php echo $publicacion['titulo'] ?></td>
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