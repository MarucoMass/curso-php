<?php

declare(strict_types=1);


function signup_inputs()
{

    if (
        isset($_SESSION["signup_data"]["username"]) &&
        !isset($_SESSION["errors_signup"]["name_taken"])
    ) {
        echo '<input type="text" name="username" placeholder="Username" value="' . $_SESSION["signup_data"]["username"] . '">';
    } else {
        echo '<input type="text" name="username" placeholder="Username">';
    }

    if (
        isset($_SESSION["signup_data"]["email"]) &&
        !isset($_SESSION["errors_signup"]["invalid_email"]) &&
        !isset($_SESSION["errors_signup"]["email_registered"])
    ) {
        echo '<input type="text" name="email" placeholder="Email" value="' . $_SESSION["signup_data"]["email"] . '">';
    } else {
        echo '<input type="text" name="email" placeholder="Email">';
    }

    echo ' <input type="password" name="pwd" placeholder="Password">';
}

function check_signup_errors()
{
    if (isset($_SESSION["errors_signup"])) {
        $errors = $_SESSION["errors_signup"];

        foreach ($errors as $error) {
            echo '<p style="color: red;">' . $error . '</p>';
        }
        unset($_SESSION["errors_signup"]);
    } elseif (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo '<p style="color: green;">¡Registro exitoso!</p>';
    }
}
