<?php 
    session_start();
    $is_logged_in = $_SESSION["logged_in"] ?? false;
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
        <div class="restaurant-plaatje">
            <img src="images/Restaurantlogo.webp" class="home-pagina-logo" alt="Logo van restaurant">
        </div>

        <div class="container-over-dough-and-fire">
            <div class="over-dough-and-fire-reserveren">
                <h2>Dough & Fire heeft de beste en lekkerste pizza's. Heeft ook het aardigste personeel en ook nog eens
                    snelle service. Wij hebben een mooi en chique restaurant. Kom gezellig eten bij Dough & Fire!
                </h2>
            </div>
            <img src="images/classic-cheese-pizza-recipe-2-64429a0cb408b.avif" class="pizza-plaatje"
                alt="plaatje van een heerlijke pizza">
        </div>

        <div class="container-over-dough-and-fire">
            <img src="images/Betere-restaurant.jpg" class="pizza-plaatje" alt="plaatje van een heerlijke pizza">
            <div class="over-dough-and-fire-formulier">
                <h2>Heeft u allergien of lust u iets niet? Geef dat aan in het formulier of zeg het tegen het
                    personeel.
                    Wij zorgen ervoor dat u het gerecht krijgt en dat u gewenst kan eten. Heeft u ook nog een vraag of
                    wij
                    iets hebben vul het formulier in om iets te vragen
                </h2>
                <a href="contact.php" class="reserveren">
                    <h2>
                        Formulier
                    </h2>
                    <img src="images/Geel-pijltje.png" class="geel-pijltje-naar-rechts" alt="geel pijltje naar rechts">
                </a>

            </div>

        </div>
    </main>
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



</body>


</html>