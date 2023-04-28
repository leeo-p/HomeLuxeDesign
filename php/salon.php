<?php
    session_start();
    include 'varSession.inc.php';
?>

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
                <?php if (isset($_SESSION['login'])): ?>
                    <div class="choix">
                        <button class="moins" onclick="ajusteQuantite(this, '-')">-</button>
                        <input type="text" value="0" min="0" max="10 "class="quantite">
                        <button class="plus" onclick="ajusteQuantite(this, '+')">+</button>
                    </div>
                <?php endif ?>
                
                <!-- Si l'utilisateur est admin on affiche le bouton stock -->
                <?php if (isset($_SESSION['login']) && $_SESSION['password'] == 'admin'): ?>
                    <button class="afficheStock" onclick="afficherStock(this)">Stock</button>
                <?php endif ?>

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