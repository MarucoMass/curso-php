<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    try {
        // POSITIONAL PARAMETERS PREPARED STATEMENTS
        // require_once "dbh.inc.php";
        // $query = "INSERT INTO users (username, email, pwd) VALUES (?, ?, ?);";

        // $stmt = $pdo->prepare($query);
        // $stmt->execute([$username, $email, $pwd]);

        // $pdo = null;
        // $stmt = null;

        // header("Location: ../index.php");

        // exit();

        // NAMED PARAMETERS PREPARED STATEMENTS
        require_once "dbh.inc.php";
        $query = "INSERT INTO users (username, email, pwd) VALUES (:username, :email, :pwd);";

        $stmt = $pdo->prepare($query);

        $options = [
            "cost" => 12
        ];
        
        $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":pwd", $hashedPwd);
        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("Location: ../index.php");

        exit();
    } catch (PDOException $e) {
        die("Error en la query " . $e->getMessage());
    }
} else {
   header("Location: ../index.php");
}
