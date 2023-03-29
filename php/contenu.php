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
        <section>
            <div class="left">
                <h1>HomeLuxeDesign</h1>
                <h4>Accueil</h4>
                <hr>
                <h4>Nos produits</h4>
                <ul>
                    <li class="nav-button" id="salon" onclick="changeSection(this)"><a>Mobilier de Salon</a></li>
                    <li class="nav-button" id="cuisine" onclick="changeSection(this)"><a>Mobilier de Cuisine</a></li>
                    <li class="nav-button" id="sdb" onclick="changeSection(this)"><a>Mobilier SdB</a></li>
                    <li class="nav-button" id="contact" onclick="changeSection(this)"><a>Contacts</a></li>
                </ul>
                <p>Pour vous connecter</p>
                <a class="connexion" href="php/connexion.php">Connexion</a>
            </div>
            <div class="right">
                <section class="to-change accueil visible">
                    <h1>"HomeLuxeDesign, offrez du nouveau à votre intérieur !"</h1>
                    <img src="img/salon3.webp" alt="image">
                    <p>
                        HomeLuxeDesign est une société spécialisée dans la vente de mobilier de luxe pour votre intérieur. Nous vous proposons un large choix de produits pour votre salon, votre cuisine et votre salle de bain. 
                        Pour toutes informations complémentaires, n'hésitez pas à nous contacter via le formulaire de contact.
                    </p>
                </section>
                <section class="to-change salon">
                    <h1>Mobilier de Salon</h1>
                    <table>
                        <?php foreach ($_SESSION['salon'] as $produit): ?>
                        <?php 
                            if ($produit[0] == 1 || $produit[0] == 4) {
                                echo '<tr>';
                            }
                        ?>
                            <td>
                                <img src="<?php echo($produit[1]) ?>" alt="image" onclick="afficheImg(this)">
                                <p> <?=$produit[2]?> <br><br>
                                    Prix : <?=$produit[3]?> €
                                </p>
                                <div class="quantite-container">
                                    <p class="stock">Stock : 10 </p>
                                    <div class="choix">
                                        <button class="moins" onclick="ajusteQuantite(this, '-')">-</button>
                                        <input type="text" value="0" min="0" max="10 "class="quantite">
                                        <button class="plus" onclick="ajusteQuantite(this, '+')">+</button>
                                    </div>
                                    <button class="afficheStock" onclick="afficherStock(this)">Stock</button>
                                    <button class="panier" onclick="ajoutPanier(this)">Ajouter au panier</button>
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
                <section class="to-change cuisine">
                    <h1>Mobilier de cuisine</h1>
                    <table>
                        <?php foreach ($_SESSION['cuisine'] as $produit): ?>
                        <?php 
                            if ($produit[0] == 1 || $produit[0] == 4) {
                                echo '<tr>';
                            }
                        ?>
                        <td>
                            <img src="<?=$produit[1]?>" alt="image" onclick="afficheImg(this)">
                            <p> <?=$produit[2]?> <br><br>
                            Prix : <?=$produit[3]?> €
                        </p>
                        <div class="quantite-container">
                            <p class="stock">Stock : 10 </p>
                            <div class="choix">
                                <button class="moins" onclick="ajusteQuantite(this, '-')">-</button>
                                    <input type="text" value="0" min="0" max="10 "class="quantite">
                                    <button class="plus" onclick="ajusteQuantite(this, '+')">+</button>
                                </div>
                                <button class="afficheStock" onclick="afficherStock(this)">Stock</button>
                                <button class="panier" onclick="ajoutPanier(this)">Ajouter au panier</button>
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
                <section class="to-change sdb">
                    <h1>Mobilier Salle de Bain</h1>
                    <table>
                        <?php foreach ($_SESSION['sdb'] as $produit): ?>
                        <?php 
                            if ($produit[0] == 1 || $produit[0] == 4) {
                                echo '<tr>';
                            }
                        ?>
                        <td>
                            <img src="<?=$produit[1]?>" alt="image" onclick="afficheImg(this)">
                            <p> <?=$produit[2]?> <br><br>
                                Prix :  <?=$produit[3]?> €
                            </p>
                            <div class="quantite-container">
                                <p class="stock">Stock : 10 </p>
                                <div class="choix">
                                    <button class="moins" onclick="ajusteQuantite(this, '-')">-</button>
                                    <input type="text" value="0" min="0" max="10 "class="quantite">
                                    <button class="plus" onclick="ajusteQuantite(this, '+')">+</button>
                                </div>
                                <button class="afficheStock" onclick="afficherStock(this)">Stock</button>
                                <button class="panier" onclick="ajoutPanier(this)">Ajouter au panier</button>
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
                <section class="to-change contact">
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
                        <textarea id="objet" name="objet" placeholder="Votre objet" style="height:20px"></textarea>
                        <label for="message">Contenu du mail</label>
                        <textarea id="message" name="message" placeholder="Votre message" style="height:200px" required></textarea>
                        <input type="submit" value="Envoyer">
                    </form>
                </section>
                <img class="imgAgrandie" src="" alt="image">
                <p class="croix" onclick="enleveImg(this)">X</p>
                <div class="contenuPanier">
                    <h3>Votre panier</h3>
                    <table class="tableauPanier">
                        <tr>
                            <th>Produit</th>
                            <th>Quantité</th>
                            <th>Prix</th>
                        </tr>
                    </table>
                    <p class="total">Total : 0 €</p>
                    <!-- Les fonctions viderPanier() et commander() ne sont pas encore définies -->
                    <button class="viderPanier" onclick="viderPanier(this)">Vider le panier</button>
                    <button class="commander" onclick="commander(this)">Commander</button>
                </div>
            </div>
        </section>
    </body>
</html>