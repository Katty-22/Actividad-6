<?php
    class usuarioModel{
        private $PDO;
        public function __construct()
        {
            require_once("C:/xampp/htdocs/Actividad-4/config/ConectionBD.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($params){
            $stament = $this->PDO->prepare("INSERT INTO usuario VALUES(null,:Nombre,:Sexo,:Correo,:telefono,:cita)");
            $stament->bindParam(":Nombre",$params['nombre']);
            $stament->bindParam(":Correo",$params['email']);
            $stament->bindParam(":telefono",$params['telefono']);
            $stament->bindParam(":Sexo",$params['sexo']);
            $stament->bindParam(":cita",$params['cita']);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        

        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM usuario");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM usuario where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }

        public function update($params){
            $stament = $this->PDO->prepare(" UPDATE usuario SET Nombre = :Nombre, Sexo = :Sexo, Correo = :Correo, telefono = :telefono, cita = :cita WHERE Id = :id");
            $stament->bindParam(":Nombre",$params['nombre']);
            $stament->bindParam(":id",$params['id']);
            $stament->bindParam(":Correo",$params['email']);
            $stament->bindParam(":telefono",$params['telefono']);
            $stament->bindParam(":Sexo",$params['sexo']);
            $stament->bindParam(":cita",$params['cita']);
            return ($stament->execute()) ? header("Location:../index.php") : false;
        }

        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM usuario WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? header("Location:../index.php") : false;
        }
    }

?>