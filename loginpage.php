<?php
session_start();
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
            <a href="loginpage.php" class="login">
                Login
            </a>
        </div>
    </header>
    <div class="verzend-email-blok-login">
        <form class="formulier" action="/php/login.php" method="POST">
            <label class="formulier-tekst-login">User</label>
            <input type="text" class="formulier-input-login" name="username" id="username" required
                placeholder="Username">
            <label class="formulier-tekst-login">Wachtwoord</label>
            <input type="password" class="formulier-input-login" name="password" id="password" required
                placeholder="Password">
            <button type="submit" class="verzend-knop-login">Login</button>
        </form>
    </div>
</body>

</html>