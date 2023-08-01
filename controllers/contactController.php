<?php
    class usernameController{
        private $model;
        public function __construct()
        {
            require_once("C:/xampp/htdocs/Proyecto-final-web/models/contactModel.php");
            $this->model = new usernameModel();
        }
        public function guardar(){

            $fecha = $_POST['fecha'];
            $correo = $_POST['correo'];
            $nombre = $_POST['nombre'];
            $asunto = $_POST['asunto'];
            $comentario = $_POST['comentario'];

            $id = $this->model->insertar($fecha, $correo, $nombre, $asunto,  $comentario);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }

        /* public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }
        public function update($id, $nombre){
            return ($this->model->update($id,$nombre) != false) ? header("Location:show.php?id=".$id) : header("Location:index.php");
        }
        public function delete($id){
            return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=".$id) ;
        } */
    }

?>