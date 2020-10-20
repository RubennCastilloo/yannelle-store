<?php 
    include 'layout/header.php';
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
                                                    <input id="titulo" type="text" class="form-control">
                                                </div>
                                                <div class="form-group has-success col-md-12">
                                                    <label for="subtitulo" class="control-label mb-1">Subtítulo</label>
                                                    <input id="subtitulo" type="text" class="form-control">
                                                </div>
                                                <div class="form-group col-md-12 mb-4 text-center">
                                                    <label class=" form-control-label">Actual foto de portada</label>
                                                    <div class="col-12 col-md-12">
                                                        <img class="text-center align-items-center justify-content-center" src="./uploads/perfil/ruben1.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div class="form-group has-success col-md-12 mb-4">
                                                    <label for="file-input" class=" form-control-label">Actualizar Portada</label>
                                                    <input type="file" id="file-input" class="form-control-file">
                                                </div>
                                                <div class="form-group has-success col-md-12">
                                                    <input id="trix-editor" type="hidden" />
                                                    <trix-editor input="trix-editor" id="contenido" style="height: 600px"></trix-editor>
                                                </div>
                                                <div class="form-group has-success col-md-12">
                                                    <button id="new-publication" type="submit" class="btn btn-lg btn-info btn-block">
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