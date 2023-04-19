# Projet Developpement Web

## Rendu TP3

---

### Ce qui a été réalisé

- [1] Factorisation du code html en plusieurs fichiers ```.php``` pour éviter les répétitions de codes et faciliter la compréhension.
- [2] Création d'un fichier JSON contenant toutes les informations des articles. Il se trouve dans le dossier ```json```
- [3] Création du fichier ```varSession.inc.php``` qui permet de récupérer les données du fichier JSON. Il permet de faire le lien entre le fichier ```contenu.php``` et le fichier ```cat.json```
- [4] Rajout de la fonction permettant d'ajouter un article au panier. Si la quantité choisie est égale à 0 le produit ne sera pas ajouté au panier. Le total du panier sera rajouté plus tard car pour le moment cette partie ne fonctionne pas.
- [5] Rajout des boutons ```Connexion``` et ```Deconnexion```
- [6] Création d'une base de données ```homeluxedesign``` contenant une table ```users``` qui contient elle même deux utilisateurs. 

Vous n'avez pas accès à cette base de données, donc vous ne pouvez pas vous
connecter depuis votre ordinateur. Pour le moment cela ne fonctionne que
pour moi en local. Ainsi vous n'aurez pas accès au Panier.
Pour quand même tester l'ajout des articles au panier il suffirat de mettre la balise (qui se situe dans ```header.php```) suivante :
```
<!-- <img class="iconPanier" src="img/panier.webp" alt="panier" onclick="afficherPanier(this)"> -->
```
en clair (enlever les balises de commentaires). Il faudra également passer le code php suivant : 
```
 <?php
    if (isset($_SESSION['login'])) {
        echo '<img class="iconPanier" src="img/panier.webp" alt="panier" onclick="afficherPanier(this)">';
    } else {
        echo '<a href="php/connexion.php"><img class="iconPanier" src="img/panier.webp" alt="panier"></a>';
    }     
?>
```
en commentaires.


---

### Lancement du site web

Dans le terminal, se placer dans le dossier du projet et lancer la commande suivante :
```
php -S localhost:8080
```
Puis dans un navigateur, aller sur l'adresse suivante :
```
http://localhost:8080/index.php
```
---

### Fonctionnalités du site web

Navigation grâce à la navbar pour switcher entre les différentes sections (salon, cuisine, salle de bain...)  

Possibilité de zoomer sur les images en cliquant dessus, de les dézoomer en cliquant sur la croix en haut à droite de l'image.
Lorsque la souris passe sur une image, la description et le prix du produit apparait.

Pour afficher le stock de chaque produit, il faut cliquer sur le bouton ```Stock``` à droite de l'image. Pour le cacher, il faut cliquer à nouveau sur le bouton ```Stock```.

Possibilité de changer la quantité de produits à acheter en cliquant sur les boutons ```+``` et ```-```. La quantité s'affiche entre les boutons.

Pour afficher le panier, il faut cliquer sur l'icone ```Panier``` en haut à droite de la page. Pour le cacher, il faut cliquer à nouveau sur l'icone ```Panier```.
Vous ne pourrez accéder au panier que si vous êtes connectés au site. Pour se connecter vous avez le bouton ```Connexion``` qui vous renvoie sur la page ```connexion.php```. Pour le moment seul deux utilisateurs ont été crées pour se connecter, vous pourrez utiliser ceux-ci :
```
login : admin
password : admin
```
ou
```
login : user
password : password
```
Une page d'inscritpion arrivant bientôt pour permettre à un utilisateur de se créer un compte et d'être rajouté dans la base de données pour ensuite pouvoir se connecter.

Un fois que vous êtes connecté, vous pouvez bien sûr vous déconnecter grâce au bouton ```Deconnexion```.

Dans le panier, il est maintenant possible de vider le panier grâce au bouton ```Vider le panier```

Le bouton ```Commander``` vous renvoi sur la page ```payement.php``` ou vous pourrez rentrer vos informations de carte bancaire. Bien évidemment le paiement ne s'effectue pas lorsque vous cliquez sur ```Payer```, cela vous renvoie sur la page d'accueil.

Dans la page contact se trouve le formulaire. Vous devez remplir tous les champs pour pouvoir envoyer le formulaire à l'exeption du champs objet.
Lorsque vous cliquez sur le bouton ```Envoyer```, un mail se génère avec le résumé des informations que vous avez rentré dans le formulaire. Vous pouvez ensuite envoyer se mail au propriétaire du site.



---

### Le fichier main.js

Le fichier ```main.js``` se trouve dans le dossier ```javascript/``` et contient toutes les fonctions javascript utilisées dans le site web.  
Celles-ci sont toutes décrites à l'aide de commentaires.

---

### Le fichier style.css

Le fichier ```style.css``` se trouve dans le dossier ```css/``` qui contient également le dossier ```font/``` qui contient les polices d'écritures utilisées dans le site web.

---

### Le fichier index.php

Le fichier ```index.php``` se trouve à la racine du projet et contient les inclusions des fichiers ```header.php```, ```contenu.php``` et ```footer.php```.  
Il est relié au fichier ```style.css``` et au fichier ```main.js``` et utilise les images qui se trouvent dans le dossier ```img/```.

---

### Le fichier cat.json

Le fichier ```cat.json``` se trouve dans le dossier ```json/``` et contient toutes les informations des articles.

---



