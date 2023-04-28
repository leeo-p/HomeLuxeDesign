<?php
    session_start();
    include 'php/varSession.inc.php';
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
        <section class="global-container">
            <div class="right">
                <section class="to-change accueil" id="accueil">
                    <div class="one">
                        <h1>"HomeLuxeDesign, offrez du nouveau à votre intérieur !"</h1>
                        <img src="img/accueil.jpg" alt="image">
                        <p>
                            HomeLuxeDesign est une société spécialisée dans la vente de mobilier de luxe pour votre intérieur. Nous vous proposons un large choix de produits pour votre salon, votre cuisine et votre salle de bain. 
                            Pour toutes informations complémentaires, n'hésitez pas à nous contacter via le formulaire de contact.
                        </p>
                    </div>
                    <div class="two">
                        <!-- Si l'utilisateur se connecte ou s'inscrit : on affiche le bouton Déconnexion sinon Connexion -->
                        <?php if (isset($_SESSION['login'])): ?>
                            <h1>Bonjour <?=$_SESSION['login']?> !</h1>
                            <a class="connexion" href="php/deconnexion.php">Déconnexion</a>
                        <?php else: ?>
                            <h1>Pour vous connecter</h1>
                            <a class="connexion" href="php/connexion.php">Connexion</a>
                        <?php endif ?>
                    </div>
                </section>
                <hr>

                <?php
                    include 'php/salon.php';
                ?>

                <img class="imgAgrandieSalon" src="" alt="image">
                <p class="croixSalon" onclick="enleveImgSalon(this)">X</p>
                <hr>
                
                <?php
                    include 'php/cuisine.php';
                ?>

                <img class="imgAgrandieCuisine" src="" alt="image">
                <p class="croixCuisine" onclick="enleveImgCuisine(this)">X</p>
                <hr>
                
                <?php
                    include 'php/sdb.php';
                ?>

                <img class="imgAgrandieSdb" src="" alt="image">
                <p class="croixSdb" onclick="enleveImgSdb(this)">X</p>
                <hr>
                
                <?php
                    include 'php/contact.php';
                ?>
                
                <div class="contenuPanier">
                    <h3>Votre panier</h3>
                    <table class="tableauPanier">
                        <tr>
                        </tr>
                    </table>
                    <button class="viderPanier" onclick="viderPanier(this)">Vider le panier</button>
                    <a href="php/payement.php"><button class="commander">Commander</button></a>
                </div>
            </div>
        </section>
        <button class="backToTop"><img src="../img/fleche.png" alt=""></button>
    </body>
</html>