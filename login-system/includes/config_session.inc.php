<?php

ini_set("session.use_only_cookies", 1);
ini_set("session.use_strict_mode", 1);

session_set_cookie_params([
    "lifetime" => 1800,
    "domain" => "localhost",
    "path" => "/",
    "secure" => true,
    "httponly" => true
]);

session_start();

if (isset($_SESSION["user_id"])) {
    if (!isset($_SESSION["last_regeneration"])) {
        regenerate_id_session_loggedin();
    } else {
        $timeInterval = 60 * 30;
        if (time() - $_SESSION["last_regeneration"] >= $timeInterval) {
            regenerate_id_session_loggedin();
        }
    }
} else {
    if (!isset($_SESSION["last_regeneration"])) {
        regenerate_id_session();
    } else {
        $timeInterval = 60 * 30;
        if (time() - $_SESSION["last_regeneration"] >= $timeInterval) {
            regenerate_id_session();
        }
    }
}


function regenerate_id_session()
{
    session_regenerate_id(true);
    $_SESSION["last_regeneration"] = time();
}

function  regenerate_id_session_loggedin()
{
    session_regenerate_id(true);

    $userId = $_SESSION["user_id"];
    $newSessionId = session_create_id();
    $sessionId = $newSessionId . "_" . $userId;
    session_id($sessionId);

    $_SESSION["last_regeneration"] = time();
}
