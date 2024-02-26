<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userName = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    try {
        require_once "dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_contr.inc.php";

        $query = "INSERT INTO users (username, email, pwd) VALUES (:username, :email, :pwd)";

        $smtp = $pdo->prepare($query);

        $options = [
            "cost" => 12
        ];

        $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

        $smtp->bindParam(":username", $userName);
        $smtp->bindParam(":email", $email);
        $smtp->bindParam(":pwd", $hashedPwd);

        $smtp->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

    } catch (PDOException $e) {
       die("Falló la solicitud " . $e->getMessage());
    }
} else {
   header("Location: ../index.php");
   die();
}
