<?php

declare(strict_types=1);

function check_login_errors()
{
    if (isset($_SESSION["errors_login"])) {
        $errors = $_SESSION["errors_login"];

        foreach ($errors as $error) {
            echo '<p style="color: red;">' . $error . '</p>';
        }
        unset($_SESSION["errors_login"]);
    } elseif (isset($_GET["login"]) && $_GET["login"] === "success") {
        echo '<p style="color: green;">¡Se ha logueado correctamente!</p>';
    }
}

function output_login(){
    if (isset($_SESSION["user_id"])) {
        echo "Bienvenido/a " . $_SESSION["user_username"]; 
    }
}