<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    require_once "../Classes/Dbh.php";
    require_once "../Classes/Signup.php";

    $options = [
        "cost" => 12
    ];

    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $signup = new Signup($username, $hashedPwd);

    

}  else {
    header("Location: ../index.php");
    die();
}