<?php
include('../model/usuarioModel.php');

   $usuario  =  new usuarioModel();

   $insertarUsuario = $usuario->delete($_GET['id']);
   
?>

