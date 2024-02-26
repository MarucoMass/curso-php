<?php

$host = "localhost";
$db_name = "curso-php";
$db_user = "root";
$db_password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $db_user, $db_password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Fallo en la conexión " . $e->getMessage();
}