<?php 
    include 'layout/header.php';

    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

     if(!$id) {
          die('No es válido');
     }

     $resultado = obtenerUsuario($id);
     $usuario = $resultado->fetch_assoc();
?>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">Editar Usuario</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Editar Usuario</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                            <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="name" class="control-label mb-1">Nombre</label>
                                                <input id="name" name="name" type="text" class="form-control" value="<?php echo ($usuario['nombre']) ? $usuario['nombre'] : '';  ?>">
                                            </div>
                                            <div class="form-group has-success col-md-6">
                                                <label for="last-name" class="control-label mb-1">Apellido</label>
                                                <input id="last-name" type="text" class="form-control" value="<?php echo ($usuario['apellido']) ? $usuario['apellido'] : '';  ?>">
                                            </div>
                                            <div class="form-group has-success col-md-6">
                                                <label for="mail" class="control-label mb-1">Correo</label>
                                                <input id="mail" type="text" class="form-control" value="<?php echo ($usuario['correo']) ? $usuario['correo'] : '';  ?>">
                                            </div>
                                            <div class="form-group has-success col-md-6">
                                                <label for="twitter" class="control-label mb-1">Twitter</label>
                                                <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1">@</span>
                                                </div>
                                                <input id="twitter" type="text" class="form-control" value="<?php echo ($usuario['twitter']) ? $usuario['twitter'] : '';  ?>" aria-describedby="basic-addon1">
                                                </div>
                                            </div>
                                            <div class="form-group has-success col-md-6">
                                                <label for="password" class="control-label mb-1">Constraseña</label>
                                                <input id="password" type="password" class="form-control">
                                            </div>
                                            <div class="form-group has-success col-md-6">
                                                <label for="confirm-password" class="control-label mb-1">Confirmar Contraseña</label>
                                                <input id="confirm-password" type="password" class="form-control">
                                            </div>
                                            
                                            </div> <!-- fin row interno-->
                                                <input type="hidden" name="" id="id-user" value="<?php echo $id ?>">
                                                <button id="edit-user" type="submit" class="btn btn-lg btn-info btn-block">
                                                    <i class="fa fa-user fa-lg"></i>&nbsp;
                                                    <span>Editar Usuario</span>
                                                </button>
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>  
                            <!-- fin editar -->
            </div>
        </div>
    </div>

</div>


<?php 
    include 'layout/footer.php';
?>