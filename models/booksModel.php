<?php
    class booksModel{
        private $PDO;
        public function __construct()
        {
            require_once("C:/xampp/htdocs/Proyecto-final-web/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        
        public function getBooks(){
            $stament = $this->PDO->prepare("SELECT * FROM titulos");
            return ($stament->execute()) ? $stament->fetchAll(PDO::FETCH_ASSOC) : false ;
        }
    }

?>