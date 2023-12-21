<?php
include('../model/personasModel.php');

   $usuario  =  new personasModel();

   $insertarUsuario = $usuario->delete($_GET['id']);
   
?>