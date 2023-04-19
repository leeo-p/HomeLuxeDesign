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
                    <a href="#accueil"><li class="nav-button actif" onclick="changeSection(this)">Accueil</li></a>
                    <a href="#salon"><li class="nav-button" onclick="changeSection(this)">Mobilier de Salon</li></a>
                    <a href="#cuisine"><li class="nav-button" onclick="changeSection(this)">Mobilier de Cuisine</li></a>
                    <a href="#sdb"><li class="nav-button" onclick="changeSection(this)">Mobilier SdB</li></a>
                    <a href="#contact"><li class="nav-button" onclick="changeSection(this)">Contacts</li></a>
                </ul>
            </nav>
            <div class="box">
                <form name="search">
                    <input type="text" class="input" name="txt" onmouseout="this.value = ''; this.blur();"  onkeyup="checkEntrer(event)"> <!-- blur() pour enlever le focus du champs texte -->
                    <img src="img/chercher.png" alt="searchbar">
                </form>
                <i class="fas fa-search"></i>
            </div>
            <!-- Si l'utilisateur est connecté on affiche le panier sinon on redirige sur la page de connexion -->  
            <?php
                if (isset($_SESSION['login'])) {
                    echo '<img class="iconPanier" src="img/panier.webp" alt="panier" onclick="afficherPanier(this)">';
                } else {
                    echo '<a href="php/connexion.php"><img class="iconPanier" src="img/panier.webp" alt="panier"></a>';
                }     
            ?>
            <!-- <img class="iconPanier" src="img/panier.webp" alt="panier" onclick="afficherPanier(this)"> -->
        </header>
    </body>
</html>