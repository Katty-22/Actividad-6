<?php
include('head.php');
include('../model/personasModel.php');

if(isset($_POST) && !empty($_POST)){
   $usuario  =  new personasModel();

   $insertarUsuario = $usuario->insertar($_POST);
   

   if ($insertarUsuario){

    $mensaje = '<div class="alert alert-success" role="alert"> Paciente Guardado </div>';
    
    
   }else {
    $mensaje = '<div class="alert alert-danger" role="alert"> Paciente No se pudo Guardar </div>';
   }
}

?>
<div class="container-sm">
    <?php
  if (isset($mensaje)) {
    echo $mensaje;
  }
  
  ?>
    <br>
    <h2>Datos de Contacto</h2>
    <br>
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">
                Nombre
            </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="Name" name="nombre" placeholder="Nombre">
            </div>
        </div>
        </br>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">
                Email
            </label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
        </div>
        </br>
        <div class="form-group row">
            <label for="inputPassword3" class="col-sm-2 col-form-label">
                Telefono
            </label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="telefono" name="telefono" placeholder="telefono">
            </div>
        </div>
        </br>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary"> Enviar

                </button>
            </div>
        </div>
    </form>
</div>