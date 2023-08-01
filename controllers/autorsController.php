<?php
    class autorsController{
        private $model;
        public function __construct()
        {
            require_once("C:/xampp/htdocs/Proyecto-final-web/models/autorsModel.php");
            $this -> model = new autorsModel();
        }
        
        public function showAutors(){
            $users = $this->model->getAutors();
            return $users;
        }
    }

?>