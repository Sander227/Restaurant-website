<?php

require 'db.php';

if ($_SERVER ['REQUEST_METHOD'] == "POST") {
    $user = $_POST [ "username"];
    $pass = $_POST [ "password"];

    $db = new db();
    $users = $db->get_users();

    foreach ($users as $row) {
        if ($user == $row [ "username"] && $pass == $row ["password"]) {
            session_start();
            $_SESSION [ "logged_in" ] = true;
            header( "location: /admin.php");
            exit;
        }
    }
}
header("location: /");