<?php

declare(strict_types=1);

function is_input_empty(string $userName, string $email, string $pwd){
    if (empty($userName) || empty($email) || empty($pwd)) {
        return true;
    } else {
        return false;
    }  
}

function is_email_invalid(string $email){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    } 
}

function is_username_taken(object $pdo, string $userName){
    if (get_username($pdo, $userName)) {
        return true;
    } else {
        return false;
    } 
}
function is_email_registered(object $pdo, string $email){
    if (get_email($pdo, $email)) {
        return true;
    } else {
        return false;
    } 
}

function create_user(object $pdo, string $userName, string $email, string $pwd){
    set_user($pdo, $userName, $email, $pwd);
}