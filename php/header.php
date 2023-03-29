<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>HomeLuxeDesign</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <script src="javascript/main.js"></script>
    </head>
    <body>
        <header>
            <a href="../index.php"><img class="logo" src="img/logo.webp" alt="image"></a>
            <h1>HomeLuxeDesign</h1>
            <nav>
                <ul>
                    <li class="nav-button actif" id="accueil" onclick="changeSection(this)"><a>Accueil</a></li>
                    <li class="nav-button" id="salon" onclick="changeSection(this)"><a>Mobilier de Salon</a></li>
                    <li class="nav-button" id="cuisine" onclick="changeSection(this)"><a>Mobilier de Cuisine</a></li>
                    <li class="nav-button" id="sdb" onclick="changeSection(this)"><a>Mobilier SdB</a></li>
                    <li class="nav-button" id="contact" onclick="changeSection(this)"><a>Contacts</a></li>
                </ul>
            </nav>
            <div class="box">
                <form name="search">
                    <input type="text" class="input" name="txt" onmouseout="this.value = ''; this.blur();"> <!-- blur() pour enlever le focus du champs texte -->
                    <img src="img/chercher.png" alt="searchbar">
                </form>
                <i class="fas fa-search"></i>
            </div>
            <img class="iconPanier" src="img/panier.webp" alt="panier" onclick="afficherPanier(this)">
        </header>
    </body>
</html>