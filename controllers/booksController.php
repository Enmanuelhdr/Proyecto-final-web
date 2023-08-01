<?php
    class booksController{
        private $model;
        public function __construct()
        {
            require_once("C:/xampp/htdocs/Proyecto-final-web/models/booksModel.php");
            $this -> model = new booksModel();
        }
        
        public function showBooks(){
            $users = $this->model->getBooks();
            return $users;
        }
    }

?>