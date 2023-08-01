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

        /* public function insertar($fecha, $correo, $nombre, $asunto, $comentario) {
            $sql = "INSERT INTO contacto (fecha, correo, nombre, asunto, comentario) VALUES (:fecha, :correo, :nombre, :asunto, :comentario)";
            $stmt = $this->PDO->prepare($sql);
    
            // Bind de parámetros con valores
            $stmt->bindParam(':fecha', $fecha);
            $stmt->bindParam(':correo', $correo);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':asunto', $asunto);
            $stmt->bindParam(':comentario', $comentario);
    
            try {
                $stmt->execute();
                return true;
            } catch(PDOException $e) {
                // Manejo de errores
                echo "Error al guardar el formulario: " . $e->getMessage();
                return false;
            }
        } */
    }
?>