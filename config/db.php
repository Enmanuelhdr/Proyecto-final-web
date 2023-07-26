<?php

    class Db{
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $db = "libreria";

        public function conexion()
        {
            try{
                $PDO = new PDO("mysql:host=" . $this -> host . ";dbname=" . $this -> db, $this -> user, $this -> password);
                return $PDO;
            } catch (PDOException $e){
                return $e -> getMessage();
            }
        }
    } // end class conection
?>