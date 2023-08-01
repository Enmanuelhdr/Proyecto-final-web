<?php
    class booksInfoModel{
        private $PDO;
        public function __construct()
        {
            require_once("C:/xampp/htdocs/Proyecto-final-web/config/db.php");
            $con = new db();
            $this->PDO = $con->conexion();
        }
        
        public function getbookId($id){
            $stament = $this->PDO->prepare("SELECT * FROM libros WHERE id_titulo =  '$id'");
            return ($stament->execute()) ? $stament->fetchAll(PDO::FETCH_ASSOC) : false ;
        }
    }

?>