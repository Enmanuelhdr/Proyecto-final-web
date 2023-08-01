<?php
    class booksInfoController{
        private $model;
        public function __construct()
        {
            require_once("C:/xampp/htdocs/Proyecto-final-web/models/autorsInfoModel.php");
            $this -> model = new booksInfoModel();
        }
        
        public function mostrarInformacion() {
            if (isset($_GET['libros']) && !empty($_GET['libros'])) {
                $id = $_GET['libros'];
                return $this->model->getbookId($id);
            } else {
                echo "ERROR";
                // Manejar el caso en que no se proporcionó un ID válido desde la URL
                // Por ejemplo, redirigir a una página de error o mostrar un mensaje de error
                return false;
            }
        }
        
    }
?>