<?php
    class autorsModel{
        private $PDO;
        public function __construct()
        {
            require_once("C:/xampp/htdocs/Proyecto-final-web/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        
        public function getAutors(){
            $stament = $this->PDO->prepare("SELECT * FROM autores");
            return ($stament->execute()) ? $stament->fetchAll(PDO::FETCH_ASSOC) : false ;
        }
    }

?>