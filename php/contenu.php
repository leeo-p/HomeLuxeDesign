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
                <section class="to-change salon" id="salon">
                    <h1>Mobilier de Salon</h1>
                    <table>
                        <?php foreach ($_SESSION['salon'] as $produit): ?>
                        <?php 
                            if ($produit[0] == 1 || $produit[0] == 4) {
                                echo '<tr>';
                            }
                        ?>
                            <td data-id="<?= $produit[0] ?>" data-cat="salon">
                                <img class="img_produit" src="<?php echo($produit[1]) ?>" alt="image" onclick="afficheImgSalon(this)">
                                <p class="produit"> <?=$produit[2]?> <br><br><br><br><br>
                                    <p class="prix"> Prix : <?=$produit[3]?> € </p>
                                </p>
                                <div class="quantite-container">
                                    <p class="stock">Stock : 10 </p>
                                    <div class="choix">
                                        <button class="moins" onclick="ajusteQuantite(this, '-')">-</button>
                                        <input type="text" value="0" min="0" max="10 "class="quantite">
                                        <button class="plus" onclick="ajusteQuantite(this, '+')">+</button>
                                    </div>
                                    <button class="afficheStock" onclick="afficherStock(this)">Stock</button>
                                    <!-- Si l'utilisateur est connecté le bouton apparait sinon non -->
                                    <?php if (isset($_SESSION['login'])): ?>
                                        <button class="panier" onclick="ajoutPanier(this)">Ajouter au panier</button>
                                    <?php endif ?>
                                </div>
                            </td>
                        <?php 
                            if ($produit[0] == 3 || $produit[0] == 6) {
                                echo '</tr>';
                            }
                        ?>
                        <?php endforeach; ?>
                    </table>
                </section>
                <img class="imgAgrandieSalon" src="" alt="image">
                <p class="croixSalon" onclick="enleveImgSalon(this)">X</p>
                <hr>
                <section class="to-change cuisine" id="cuisine">
                    <h1>Mobilier de cuisine</h1>
                    <table>
                        <?php foreach ($_SESSION['cuisine'] as $produit): ?>
                        <?php 
                            if ($produit[0] == 1 || $produit[0] == 4) {
                                echo '<tr>';
                            }
                        ?>
                        <td>
                            <img class="img_produit" src="<?=$produit[1]?>" alt="image" onclick="afficheImgCuisine(this)">
                            <p class="produit"> <?=$produit[2]?> <br><br><br><br><br>
                                <p class="prix"> Prix : <?=$produit[3]?> € </p>
                        </p>
                        <div class="quantite-container">
                            <p class="stock">Stock : 10 </p>
                            <div class="choix">
                                <button class="moins" onclick="ajusteQuantite(this, '-')">-</button>
                                    <input type="text" value="0" min="0" max="10 "class="quantite">
                                    <button class="plus" onclick="ajusteQuantite(this, '+')">+</button>
                                </div>
                                <button class="afficheStock" onclick="afficherStock(this)">Stock</button>
                                <!-- Si l'utilisateur est connecté le bouton apparait sinon non -->
                                <?php if (isset($_SESSION['login'])): ?>
                                    <button class="panier" onclick="ajoutPanier(this)">Ajouter au panier</button>
                                <?php endif ?>                            
                            </div>
                        </td>
                        <?php 
                            if ($produit[0] == 3 || $produit[0] == 6) {
                                echo '</tr>';
                            }
                        ?>
                        <?php endforeach; ?>
                    </table>
                </section>
                <img class="imgAgrandieCuisine" src="" alt="image">
                <p class="croixCuisine" onclick="enleveImgCuisine(this)">X</p>
                <hr>
                <section class="to-change sdb" id="sdb">
                    <h1>Mobilier Salle de Bain</h1>
                    <table>
                        <?php foreach ($_SESSION['sdb'] as $produit): ?>
                        <?php 
                            if ($produit[0] == 1 || $produit[0] == 4) {
                                echo '<tr>';
                            }
                        ?>
                        <td>
                            <img class="img_produit" src="<?=$produit[1]?>" alt="image" onclick="afficheImgSdb(this)">
                            <p class="produit"> <?=$produit[2]?> <br><br><br><br><br>
                                <p class="prix"> Prix :  <?=$produit[3]?> € </p>
                            </p>
                            <div class="quantite-container">
                                <p class="stock">Stock : 10 </p>
                                <div class="choix">
                                    <button class="moins" onclick="ajusteQuantite(this, '-')">-</button>
                                    <input type="text" value="0" min="0" max="10 "class="quantite">
                                    <button class="plus" onclick="ajusteQuantite(this, '+')">+</button>
                                </div>
                                <button class="afficheStock" onclick="afficherStock(this)">Stock</button>
                                <!-- Si l'utilisateur est connecté le bouton apparait sinon non -->
                                <?php if (isset($_SESSION['login'])): ?>
                                    <button class="panier" onclick="ajoutPanier(this)">Ajouter au panier</button>
                                <?php endif ?>                           
                            </div>
                        </td>
                        <?php 
                            if ($produit[0] == 3 || $produit[0] == 6) {
                                echo '</tr>';
                            }
                        ?>
                        <?php endforeach; ?>
                    </table>               
                </section>
                <img class="imgAgrandieSdb" src="" alt="image">
                <p class="croixSdb" onclick="enleveImgSdb(this)">X</p>
                <hr>
                <section class="to-change contact" id="contact">
                    <h1>Contact</h1>
                    <form action="mailto:portetleo@cy-tech.fr" method="post" enctype="text/plain">
                        <label for="name">Nom</label>
                        <input type="text" id="name" name="name" placeholder="Votre nom" required>
                        <label for="firstname">Prénom</label>
                        <input type="text" id="firstname" name="firstname" placeholder="Votre prénom" required>
                        <label for="naissance">Date de naissance</label>
                        <input type="date" id="naissance" name="naissance" required>
                        <label for="sexe">Sexe</label>
                        <select id="sexe" name="sexe" required>
                            <option value="homme">Homme</option>
                            <option value="femme">Femme</option>
                        </select>
                        <label for="metier">Métier</label>
                        <select name="metier" id="metier" required>
                            <option value="etudiant">Etudiant</option>
                            <option value="employe">Employé</option>
                            <option value="cadre">Cadre</option>
                            <option value="artisan">Artisan</option>
                            <option value="commercant">Commercant</option>
                            <option value="chefentreprise">Chef d'entreprise</option>
                            <option value="agriculteur">Agriculteur</option>
                            <option value="ouvrier">Ouvrier</option>
                            <option value="sansemploi">Sans emploi</option>
                            <option value="retraite">Retraité</option>
                            <option value="autre">Autre</option>
                        </select>
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Votre email" required>
                        <label for="objet">Objet</label>
                        <textarea id="objet" name="objet" placeholder="Votre objet" style="max-height:20px"></textarea>
                        <label for="message">Contenu du mail</label>
                        <textarea id="message" name="message" placeholder="Votre message" style="max-height:100px" required></textarea>
                        <input type="submit" value="Envoyer">
                    </form>
                </section>
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