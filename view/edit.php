<?php
include('head.php');
include('../model/usuarioModel.php');

   $usuarioObj = new usuarioModel();
   $paciente = $usuarioObj->show($_GET['id']);

if(isset($_POST) && !empty($_POST)){

   $insertarUsuario = $usuarioObj->update($_POST);
   

   if ($insertarUsuario){

    $mensaje = '<div class="alert alert-success" role="alert"> Paciente Actulizado </div>';
    
    
   }else {
    $mensaje = '<div class="alert alert-danger" role="alert"> Paciente No se pudo Actualizar </div>';
   }
}


?>

<div class="container-sm">
  <?php
  if (isset($mensaje)) {
    echo $mensaje;
  }
  
  ?>

<div class="container-sm">
<h2>Editar Paciente</h2>
<form method="POST" enctype="multipart/form-data">
  <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">
      Nombre
    </label>
    <div class="col-sm-10">
      <input type="hidden" name="id" value = "<?= $paciente[0]?>">
      <input type="text" class="form-control" id="Name" name="nombre" placeholder="nombre" value="<?= $paciente[1]?>">
    </div>
  </div>
  </br>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">
      Email
    </label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email" placeholder="email" value="<?= $paciente[3]?>" >
    </div>
  </div>
  </br>
  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">
      Telefono
    </label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="telefono" name="telefono" placeholder=" telefono" value="<?= $paciente[4]?>"  >
    </div>
  </div>
</br>
<fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Sexo</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="hombre" value="hombre" <?php if ($paciente[2] == "hombre") {
           echo "checked" ;
          } ?> > 
          <label class="form-check-label" for="gridRadios1">
            Hombre
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="mujer" value="mujer" <?php if ($paciente[2] == "mujer") {echo "checked" ;} ?>>
          <label class="form-check-label" for="gridRadios2">
            Mujer
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="sexo" id="otro" value="otro" <?php if ($paciente[2] == "otro") {
           echo "checked" ;} ?>>
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
      <input type="date" class="form-control" id="cita" name="cita" placeholder=" telefono" value="<?= $paciente[5]?>">
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


