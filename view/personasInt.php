<?php
include('adminNav.php');
include('../model/personasModel.php');

$usuario  =  new personasModel();

$pacientes = $usuario->index();


?>

<div class="container-sm">
<h2>Solicitudes de Contacto</h2>
<table class="table">
  <thead>
    <tr>
     
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Telefono</th>
      <th scope="col">Acciones</th>

    </tr>
  </thead>
  <tbody>
        <?php if($pacientes): ?>
        <?php foreach($pacientes as $pacientes): ?>
        <tr>
            <th><?= $pacientes[1] ?></th>
            <th><?= $pacientes[2] ?></th>
            <th><?= $pacientes[3] ?></th>
            

            <th>
                <a href="deletePersonas.php?id=<?= $pacientes[0]?>" class="btn btn-danger">Eliminar</a>
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