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