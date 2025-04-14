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

<body>
    <main class="main">
        <div class="contact-eerste-blokje">
            <h1 class="mogelijkheden-voor-contact-tekst">Contact opleggen of een vraag? Vul a.u.b het onderstaand
                formulier in </h1>
        </div>
        <div class="verzend-email-blok">
            <form class="formulier" action="https://formsubmit.co/smitssander3@gmail.com" method="POST">
                <label class="formulier-tekst">Naam</label>
                <input type="text" class="formulier-input" name="naam" placeholder="Naam:">
                <label class="formulier-tekst">E-mail</label>
                <input type="email" class="formulier-input" name="email" placeholder="E-mail:">
                <label class="formulier-tekst">Bericht</label>
                <textarea class="formulier-input-lang" name="bericht" placeholder="Bericht:"></textarea>
                <button type="submit" class="verzend-knop">Verzend</button>
            </form>

        </div>
        <footer>
            <div class="tekst-footer">
                <a href="menu.php" class="contact-button">
                    <span>Menu</span>
                </a>
                <a href="contact.php" class="contact-button">
                    <span>Contact</span>
                </a>
            </div>

            <div class="footer-logos">
                <a class="bolletjes"
                    href="https://www.google.nl/maps/place/Restaurant+Shusui/@51.5243598,5.9769999,117m/data=!3m1!1e3!4m6!3m5!1s0x47c74006efa7ff1d:0xf9363b1762a3f6d9!8m2!3d51.5242754!4d5.977567!16s%2Fg%2F1vgqc9tv?entry=ttu&g_ep=EgoyMDI1MDQwNy4wIKXMDSoASAFQAw%3D%3D" 
                    target="_blank">
                    <img src="images/GoogleMaps.png" class="het-maps-logo" alt="maps logo">
                </a>
                <a class="bolletjes" href="https://www.instagram.com/" target="_blank">
                    <img src="images/instagram.avif" class="het-maps-logo" alt="insta logo">
                </a>
                <a class="bolletjes" href="https://x.com/" target="_blank">
                    <img src="images/x.png" class="het-maps-logo" alt="twitter logo">
                </a>

            </div>
        </footer>
    </main>

</body>

</html>