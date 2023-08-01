<?php
    class usernameModel{
        private $PDO;
        public function __construct()
        {
            require_once("C:/xampp/htdocs/Proyecto-final-web/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        public function insertar($fecha, $correo, $nombre, $asunto, $comentario){
            $stament = $this->PDO->prepare("INSERT INTO contacto VALUES(null,'$fecha','$correo','$nombre','$asunto','$comentario')");
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
        public function show($id){
            $stament = $this->PDO->prepare("SELECT * FROM contacto where id = :id limit 1");
            $stament->bindParam(":id",$id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
    }

?>