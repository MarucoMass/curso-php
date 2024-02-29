<?php

class Signup extends Dbh
{
    private $username;
    private $pwd;

    private function __construct($username, $pwd)
    {
        $this->username = $username;
        $this->pwd = $pwd;
    }

    public function set_user()
    {
        $query = "INSERT INTO users (username, pwd) VALUES (:username, :pwd)";
        $stmt = parent::connected()->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":pwd", $this->pwd);
        $stmt->execute();

        $stmt = null;
    }
}
