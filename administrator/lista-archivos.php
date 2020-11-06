<?php 
    include 'layout/header.php';
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="archivos-subidos mt-3 col-md-12">
                        <div class="table-responsive table--no-card m-b-30 text-center">
                            <table class="table table-borderless table-striped table-earning todos-archivos">
                                <thead>
                                    <tr>
                                        <th>URL</th>
                                        <th>Fecha</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody id="files-table">
                                    <?php $archivos = obtenerArchivos(); 
                                    if($archivos->num_rows) { 
                                    foreach($archivos as $archivo) { ?>
                                        <tr>
                                            <td class="url-file">
                                                <input type="hidden" name="" value="../uploads/files/<?php echo $archivo['archivo'] ?>" class="input-hid">
                                                <a href="../uploads/files/<?php echo $archivo['archivo'] ?>" target="_blank"><?php echo $archivo['archivo'] ?></a>
                                            </td>
                                            <td>
                                                <?php echo $archivo['fecha'] ?>
                                            </td>
                                            <td>
                                                <button class="copy-url btn btn-sm btn-success">
                                                    <i class="fa fa-copy copy-url"></i>  Copiar URL
                                                </button>
                                                <button class="btn btn-sm btn-danger delete-files" data-id="<?php echo $archivo['id'] ?>">
                                                <i class="fa fa-trash fa-lg delete-file"></i>&nbsp;
                                                <span>Borrar</span>
                                                </button>
                                            </td>
                                        </tr>
                                    <?php }
                                    } else { ?>

                                        <td colspan="3">
                                            <h4 class="text-danger">No hay datos para mostrar</h4>
                                        </td>

                                    <?php }?>
                                </tbody>
                            </table>
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