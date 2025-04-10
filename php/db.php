<?php

class db {
    private $pdo;

    public function __construct() {
        
        $host = "db";
        $db = "mydatabase";
        $user = "user";
        $password = "password";

        $this->pdo = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    }
    
    public function get_users() {
        $sql = "SELECT * FROM users ORDER BY id ASC";
        return $this->pdo->query($sql);
    }

    public function get_connection(): PDO {
        return $this->pdo;
    }
}