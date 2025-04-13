<?php

session_start();
$is_logged_in = $_SESSION["logged_in"] ?? false;
if (!$is_logged_in) {
    die("GET OUT OF THIS PAGE YOU DONT HAVE RIGHTS");
}
?>



<!DOCTYPE php>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>

<body>


    <header>
        <div class="header-cont">
            <img src="images/Restaurantlogo.webp" class="restaurant-logo" alt="Het logo van het restaurant">
            <a href="index.php" class="naam-doos">
                <span class="naam-restaurant">Dough & Fire</span>
            </a>
        </div>

        <ul class="menu-bar">
            <li>
                <a href="index.php" class="menu-text">
                    Home
                </a>
            </li>
            <li><a href="menu.php" class="menu-text">
                    Menu
                </a>
            </li>
            <li>
                <a href="contact.php" class="menu-text">
                    Contact
                </a>
            </li>
        </ul>

        <div class="header-cont">
            <a href="/php/logout.php" class="login">
                Logout
            </a>
        </div>
    </header>
    <div class="verzend-email-blok-login">
    <form class="formulier" action="/php/adminmenu.php" method="POST">

        <label class="formulier-tekst-login">Naam van het product</label>
        <input type="text" class="formulier-input-login" name="naam" required>

        <label class="formulier-tekst-login">Beschrijving van het product</label>
        <input type="text" class="formulier-input-login" name="beschrijving" required>

        <label class="formulier-tekst-login">Prijs van het product</label>
        <input type="price" class="formulier-input-login" name="prijs" required>

        <button type="submit" class="verzend-knop-login">Voeg toe</button>
    </form>
    </div>
</body>

</html>