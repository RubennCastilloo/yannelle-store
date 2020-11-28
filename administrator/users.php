<?php 
    include 'layout/header.php';
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Nuevo Usuario</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Crear Nuevo Usuario</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                            <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name" class="control-label mb-1">Nombre</label>
                                                <input id="name" name="name" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="last-name" class="control-label mb-1">Apellido</label>
                                                <input id="last-name" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="mail" class="control-label mb-1">Correo</label>
                                                <input id="mail" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="twitter" class="control-label mb-1">Twitter</label>
                                                <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">@</span>
                                                </div>
                                                <input id="twitter" type="text" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="link-twitter" class="control-label mb-1">Link de Twitter</label>
                                                <input id="link-twitter" type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="password" class="control-label mb-1">Constraseña</label>
                                                <input id="password" type="password" class="form-control">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="confirm-password" class="control-label mb-1">Confirmar Contraseña</label>
                                                <input id="confirm-password" type="password" class="form-control">
                                            </div>
                                            <div class="form-group col-md-12 mb-4">
                                                <label for="file-input" class=" form-control-label">Foto Perfil</label>
                                                <input type="file" id="perfil-picture" class="form-control-file">
                                            </div>
                                            </div> <!-- fin row interno-->
                                                <button id="add-user" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-user fa-lg"></i>&nbsp;
                                                    <span>Agregar Usuario</span>
                                                </button>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>  
                            
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning" id="listado-usuarios">
                                        <thead>
                                            <tr>
                                                <th>Nombre</th>
                                                <th>Apellido</th>
                                                <th>Correo</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody id="form-users">
                                        <?php $usuarios = obtenerUsuarios(); 
                                        if($usuarios->num_rows) { 
                                            
                                            foreach($usuarios as $usuario) { ?>
                                            <tr>  
                                                <td><?php echo $usuario['nombre'] ?></td>
                                                <td><?php echo $usuario['apellido'] ?></td>
                                                <td><?php echo $usuario['correo'] ?></td>
                                                <td>
                                                    <a href="edit-user.php?id=<?php echo $usuario['id'] ?>" id="add-user" class="btn btn-sm btn-info">
                                                        <i class="fa fa-edit fa-lg"></i>&nbsp;
                                                        <span>Editar</span>
                                                    </a>
                                                    <button id="add-user" class="btn btn-sm btn-danger delete-user" data-id="<?php echo $usuario['id'] ?>">
                                                        <i class="fa fa-trash fa-lg"></i>&nbsp;
                                                        <span>Borrar</span>
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