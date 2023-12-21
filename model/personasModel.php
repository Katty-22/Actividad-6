<?php
    class personasModel{
        private $PDO;
        public function __construct()
        {
            require_once("C:/xampp/htdocs/Actividad-6/config/ConectionBD.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($params){
            $stament = $this->PDO->prepare("INSERT INTO personas VALUES(null,:Nombre,:Email,:Telefonp)");
            $stament->bindParam(":Nombre",$params['nombre']);
            $stament->bindParam(":Email",$params['email']);
            $stament->bindParam(":Telefonp",$params['telefono']);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        

        }
        public function index(){
            $stament = $this->PDO->prepare("SELECT * FROM personas");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }

        

        public function delete($id){
            $stament = $this->PDO->prepare("DELETE FROM personas WHERE id = :id");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? header("Location:personasInt.php") : false;
        }
    }

?>