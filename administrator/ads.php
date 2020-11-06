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
                                                    <label for="image" class=" form-control-label">Imagen</label>
                                                    <input type="file" id="image" class="form-control-file">
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
                                                <label for="ubicacion" class=" form-control-label">Ubicación</label>
                                                    <select id="ubicacion" class="form-control">
                                                    <option value="">Seleccionar</option>
                                                    <option value="1">Principal 1</option>
                                                    <option value="2">Principal 2</option>
                                                    <option value="3">Principal Aside</option>
                                                    <option value="4">Notas 1</option>
                                                    <option value="5">Notas Aside</option>
                                                    <option value="6">Categorias 1</option>
                                                    <option value="7">Categorias Aside</option>
                                                    </select>
                                            </div>
                                            </div>
                                            
                                            <div class="form-group has-success col-md-12">
                                                <button id="new-ad" type="submit" class="btn btn-lg btn-info btn-block">
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
                                    <table class="table table-borderless table-striped table-earning listado-ads">
                                        <thead>
                                            <tr>
                                                <th>Titulo</th>
                                                <th>Fecha</th>
                                                <th>Ubicación</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody id="ads-table">
                                        <?php $ads = obtenerAdsAdmin(); 
                                        if($ads->num_rows) { 
                                        foreach($ads as $ad) { ?>
                                            <tr>
                                                <td><?php echo $ad['titulo'] ?></td>
                                                <td><?php echo $ad['fecha'] ?></td>
                                                <td>
                                                    <?php 
                                                        if($ad['ubicacion'] === '1'){
                                                            echo 'Principal 1';
                                                        } 
                                                        if($ad['ubicacion'] === '2'){
                                                            echo 'Principal 2';
                                                        }
                                                        if($ad['ubicacion'] === '3'){
                                                            echo 'Principal Aside';
                                                        }
                                                        if($ad['ubicacion'] === '4'){
                                                            echo 'Notas 1';
                                                        }
                                                        if($ad['ubicacion'] === '5'){
                                                            echo 'Notas Aside';
                                                        }
                                                        if($ad['ubicacion'] === '6'){
                                                            echo 'Categorias 1';
                                                        }
                                                        if($ad['ubicacion'] === '7'){
                                                            echo 'Categorias Aside';
                                                        }
                                                    ?>
                                                </td>
                                                <td>
                                                    <input type="hidden" name="" value="<?php echo $ad['imagen'] ?>" id="file-name">
                                                    <button class="btn btn-sm btn-danger delete-ad" data-id="<?php echo $ad['id'] ?>">
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