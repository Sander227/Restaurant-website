<?php
    session_start();
    $is_logged_in = $_SESSION["logged_in"] ?? false;
?>
 
<!DOCTYPE html>
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
            <?php
            if (!$is_logged_in) {
                echo '<a href="loginpage.php" class="login">Login</a>';
            } else {
                echo '<a href="admin.php" class="login">Admin</a>';
            }
            ?>
        </div>
    </header>
 
    <main>
        <div class="menu-cont">
 
 
            <?php
 
            require_once 'php/db.php';
 
            $db = new db();
 
            $sql = "SELECT * FROM `menu`;";
            $result = $db->get_connection()->query($sql);
 
            foreach ($result as $row) {
 
 
                $template = '
                        <p class="menu-item">%s - %s - €%s</p>
                    ';
 
                echo sprintf($template, $row["naam"], $row["omschrijving"], $row["prijs"]);
            }
            ?>
 
 
        </div>
    </main>
 
 
</body>
 
</html>