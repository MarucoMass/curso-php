<?php

declare(strict_types=1);

function get_username(object $pdo, string $userName)
{
    $query = "SELECT username FROM users WHERE username = :username";
    $tmt = $pdo->prepare($query);
    $tmt->bindParam(":username", $userName);
    $tmt->execute();

    $result = $tmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function get_email(object $pdo, string $email)
{
    $query = "SELECT email FROM users WHERE email = :email";
    $tmt = $pdo->prepare($query);
    $tmt->bindParam(":email", $email);
    $tmt->execute();

    $result = $tmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function set_user(object $pdo, string $userName, string $email, string $pwd)
{
    $query = "INSERT INTO users (username, email, pwd) VALUES (:username, :email, :pwd)";

    $stmt = $pdo->prepare($query);

    $options = [
        "cost" => 12
    ];

    $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $stmt->bindParam(":username", $userName);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":pwd", $hashedPwd);

    $stmt->execute();

}
