<?php

class Dbh {
    private $host = "localhost";
    private $db_name = "curso-php";
    private $db_user = "root";
    private $db_password = "";

    protected function connected(){
        try {
            $pdo = new PDO("mysql:host=" . $this->host . "dbname=" . $this->db_name, $this->db_user, $this->db_password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $pdo; // Hay que retornar el objeto de la conexion
        } catch (PDOException $e) {
            die("Error en la conexion " . $e->getMessage());
        }
    }
}