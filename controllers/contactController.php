<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("C:/xampp/htdocs/Proyecto-final-web/controllers/contactController.php");
    $contactController = new contactController();
    $contactController->guardar();
}
?>
<?php
    class contactController{
        private $model;
        public function __construct()
        {
            require_once("C:/xampp/htdocs/Proyecto-final-web/models/contactModel.php");
            $this->model = new usernameModel();
        }
        /* public function guardar(){

            $fecha = $_POST['fecha'];
            $correo = $_POST['correo'];
            $nombre = $_POST['nombre'];
            $asunto = $_POST['asunto'];
            $comentario = $_POST['comentario'];

            $id = $this->model->insertar($fecha, $correo, $nombre, $asunto,  $comentario);
            return ($id!=false) ? header("Location:succes.php") : header("Location:create.php");
        } */

        

        public function guardar()
        {
            $fecha = $_POST['fecha'];
            $correo = $_POST['correo'];
            $nombre = $_POST['nombre'];
            $asunto = $_POST['asunto'];
            $comentario = $_POST['comentario'];

            $id = $this->model->insertar($fecha, $correo, $nombre, $asunto, $comentario);
            
            if ($id !== false) {
                header("Location:../index.php");
            } else {
                header("Location:create.php");
            }
            exit(); // Es importante agregar exit() después de las redirecciones para asegurarse de que el script se detenga.
        }








        /* public function guardar()
        {
            $fecha = $_POST['fecha'];
            $correo = $_POST['correo'];
            $nombre = $_POST['nombre'];
            $asunto = $_POST['asunto'];
            $comentario = $_POST['comentario'];

            $id = $this->model->insertar($fecha, $correo, $nombre, $asunto, $comentario);

            if ($id !== false) {
                // Aquí puedes mostrar un mensaje de éxito en la misma página, si lo deseas.
                echo "Datos guardados exitosamente.";
            } else {
                // Si ocurrió algún error, muestra un mensaje de error.
                echo "Error al guardar los datos.";
            }
        } */

        /* public function guardar() {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Obtener los datos del formulario
                $fecha = $_POST['fecha'];
                $correo = $_POST['correo'];
                $nombre = $_POST['nombre'];
                $asunto = $_POST['asunto'];
                $comentario = $_POST['comentario'];
    
                // Guardar los datos en la base de datos
                $resultado = $this->model->insertar($fecha, $correo, $nombre, $asunto, $comentario);
    
                if ($resultado) {
                    // Redireccionar a una página de éxito o mostrar un mensaje de éxito
                    header("Location: succes.php");
                    exit();
                } else {
                    // Mostrar un mensaje de error
                    echo "Error al guardar el formulario";
                }
            }
        } */
        
    }    
?>