<?php
 
 // $host = "localhost";
 // $dbname = "curso-php";
 $dsn = "mysql:host=localhost;dbname=curso-php";
$dbusername = "root";
$dbpassword = "";

// $conn = mysqli_connect($host, $dbname, $dbusername, $dbpassword);

// if(mysqli_connect_errno()){
//     die("error" . mysqli_connect_error());
// }

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
   echo "Hubo un error en la conexión ". $e->getMessage();
}