<?php
    class autorsInfoController{
        private $model;
        public function __construct()
        {
            require_once("C:/xampp/htdocs/Proyecto-final-web/models/autorsInfoModel.php");
            $this -> model = new autorsInfoModel();
        }
        
        public function mostrarInformacion() {
            if (isset($_GET['autor']) && !empty($_GET['autor'])) {
                $id = $_GET['autor'];
                return $this->model->getAutorId($id);
            } else {
                echo "ERROR";
                // Manejar el caso en que no se proporcionó un ID válido desde la URL
                // Por ejemplo, redirigir a una página de error o mostrar un mensaje de error
                return false;
            }
        }
        
    }
?>