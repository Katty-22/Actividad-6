<?php
include('head.php');
include('../model/usuarioModel.php');

if(isset($_POST) && !empty($_POST)){
   $usuario  =  new usuarioModel();

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
<h2>Crear Paciente</h2>
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
      <input type="number" class="form-control" id="telefono" name="telefono" placeholder= "telefono">
    </div>
  </div>
</br>
  <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="hombre" value="hombre">
          <label class="form-check-label" for="gridRadios1">
            Hombre
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="mujer" value="mujer">
          <label class="form-check-label" for="gridRadios2">
            Mujer
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="otro" value="otro">
          <label class="form-check-label" for="gridRadios2">
            Otro
          </label>
        </div>
      </div>
    </div>
  </fieldset>
  </br>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">
      Fecha Cita
    </label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="cita" name="cita" placeholder=" telefono">
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Guardar
      </button>
    </div>
  </div>
</form>
</div>


