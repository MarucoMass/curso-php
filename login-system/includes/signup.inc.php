<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $userName = $_POST["username"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];

    try {
        require_once "dbh.inc.php";
        require_once "signup_model.inc.php";
        require_once "signup_contr.inc.php";

        // ERROR HANDLERS

        $errors = [];

        if (is_input_empty($userName, $email, $pwd)) {
            $errors["empty_fields"] = "Tienes que completar todos los campos";
        }
        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "El email que ingresaste no es válido";
        }
        if (is_username_taken($pdo, $userName)) {
            $errors["name_taken"] = "El nombre que usaste ya fue tomado por otro usuario";
        }
        if (is_email_registered($pdo, $email)) {
            $errors["email_registered"] = "El email que usaste ya fue registrado por otro usuario";
        }

        require_once "config_session.inc.php";

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            header("Location: ../index.php");
            die();
        }

        create_user($pdo, $userName, $email, $pwd);
        
        header("Location: ../index.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();
    } catch (PDOException $e) {
        die("Falló la solicitud " . $e->getMessage());
    }
} else {
    header("Location: ../index.php");
    die();
}
