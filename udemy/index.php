<?php

$host="localhost";
$dbname = "testdata";
$user = "root";
$pwd = "";

try {
    $pdo = new PDO("mysql:$host;dbname=$dbname", $user, $pwd);
    var_dump($pdo);
} catch (PDOException $e) {
    echo "PDOException: " . $e->getMessage();
}
