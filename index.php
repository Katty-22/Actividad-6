<?php
include('view/head.php');
include('model/usuarioModel.php');

$usuario  =  new usuarioModel();

$pacientes = $usuario->index();


?>

<div class="container-sm">
<h2>Pacientes</h2>
<table class="table">
  <thead>
    <tr>
     
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Sexo</th>
      <th scope="col">cita</th>
      <th scope="col">Acciones</th>

    </tr>
  </thead>
  <tbody>
        <?php if($pacientes): ?>
        <?php foreach($pacientes as $pacientes): ?>
        <tr>
            <th><?= $pacientes[1] ?></th>
            <th><?= $pacientes[3] ?></th>
            <th><?= $pacientes[4] ?></th>
            <th><?= $pacientes[2] ?></th>
            <th><?= $pacientes[5] ?></th>

            <th>
                <a href="view/edit.php?id=<?= $pacientes[0]?>" class="btn btn-success">Modificar</a>
                <!-- Button trigger modal -->
                <a href="view/delete.php?id=<?= $pacientes[0]?>" class="btn btn-danger">Eliminar</a>
            </th>
        </tr>
        <?php endforeach; ?>
        <?php else: ?>
        <tr>
            <td colspan="3" class="text-center">No hay registros actualmente</td>
        </tr>
        <?php endif; ?>
    </tbody>
</table>  
</div>
