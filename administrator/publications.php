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
                                                <div class="form-group has-success col-md-12">
                                                    <label for="titulo" class="control-label mb-1">Título</label>
                                                    <input id="titulo" type="text" class="form-control">
                                                </div>
                                                <div class="form-group has-success col-md-12">
                                                    <label for="subtitulo" class="control-label mb-1">Subtítulo</label>
                                                    <input id="subtitulo" type="text" class="form-control">
                                                </div>
                                                <div class="form-group has-success col-md-12 mb-4">
                                                    <label for="file-input" class=" form-control-label">Portada</label>
                                                    <input type="file" id="file-input" class="form-control-file">
                                                </div>
                                                <div class="form-group has-success col-md-12">
                                                    <input id="trix-editor" type="hidden" />
                                                    <trix-editor input="trix-editor" id="contenido" style="height: 600px"></trix-editor>
                                                </div>
                                                <div class="form-group has-success col-md-12">
                                                    <label for="categoria" class=" form-control-label">Categoría</label>
                                                        <select id="categoria" class="form-control">
                                                        <option value="">Seleccionar</option>
                                                        <option value="1">Tech</option>
                                                        <option value="2">Entretenimiento</option>
                                                        </select>
                                                </div>
                                                <div class="form-group has-success col-md-12">
                                                    <label for="subcategoria" class=" form-control-label">Subcategoría</label>
                                                        <select id="subcategoria" class="form-control">
                                                        <option value="">No hay valores</option>
                                                        </select>
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
                                        <tbody>
                                            <tr>
                                                <td>Apple says Epic is ‘putting...</td>
                                                <td>Ruben Castillo</td>
                                                <td>21 Agosto 2020 12:38 PM</td>
                                                <td>
                                                    <a href="edit-publication.php" id="add-user" class="btn btn-sm btn-info">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <button id="add-user" class="btn btn-sm btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Apple says Epic is ‘putting...</td>
                                                <td>Ruben Castillo</td>
                                                <td>21 Agosto 2020 12:38 PM</td>
                                                <td>
                                                    <a href="edit-publication.php" id="add-user" class="btn btn-sm btn-info">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <button id="add-user" class="btn btn-sm btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Apple says Epic is ‘putting...</td>
                                                <td>Ruben Castillo</td>
                                                <td>21 Agosto 2020 12:38 PM</td>
                                                <td>
                                                    <a href="edit-publication.php" id="add-user" class="btn btn-sm btn-info">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <button id="add-user" class="btn btn-sm btn-danger">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            
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