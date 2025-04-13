<?php
session_start(); 
$is_logged_in = $_SESSION["logged_in"] ?? false;
if (!$is_logged_in) {
    die("GET OUT OF THIS PAGE YOU DONT HAVE RIGHTS");
}

require_once "db.php";

$db = new db();
$conn = $db->get_connection();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productnaam = $_POST ["naam"];
    $productomschrijving = $_POST ["beschrijving"];
    $productprijs = $_POST ["prijs"];

    $sql = "INSERT INTO menu (naam, omschrijving, prijs) VALUES (:naam, :beschrijving, :prijs)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ":naam" => $productnaam,
        ":beschrijving" => $productomschrijving,
        ":prijs"=> $productprijs
    ]);
    header( "location: ../admin.php");
}