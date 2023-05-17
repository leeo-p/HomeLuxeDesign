# Projet Developpement Web

## Rendu TP Final

---

### Ce qui a été réalisé depuis le dernier Rendu

- Création de deux script ```.sql``` pour la base de données. Vous pourrez ensuite exécuter ces script dans mysql connecté en utilisateur ```root``` avec les commandes suivantes : 
```
mysql -u root -p
```
```
source mysql/<monScript.sql>;
```

- Grâce à la base de données, il est maintenant possible de se connecter ou de s'inscrire sur le site.

- Il existe différents types d'utilisateurs : 
    - ```admin``` : correspond à l'administrateur et seul cet utilisateur peut avoir accès aux stocks.
    - ```user``` : correspond à l'utilisateur et il peut ajouter des produits au panier, les consulter, les enlever du panier et commander.  
    - Lorsque l'utilisateur n'est pas connecté il n'à pas accès au panier eu ne peu seulement consulter le site.

- Le design du site a été revu entièrement pour une meilleure visibilité et pour le rendre plus moderne. La navbar vous dirige toujours vers la section demandée à l'aide d'un scroll vers le bas.

- Un bouton de retour vers le haut à également été ajouté pour faciliter la navigation.

- Le code a été de nouveau refactoriser en fichier ```.php``` pour faciliter la compréhension.

- Création de la page ```inscription.php``` permettant de se créer un compte sur le site.

- Rajout du prix total du panier qui évolu en fonction des articles ajoutés, rajout de la quantité d'articles commandés.

---

### Lancement du site web

Dans le terminal, se placer dans le dossier du projet et lancer la commande suivante :
```
php -S localhost:8080
```
Puis dans un navigateur, rendez-vous sur l'adresse suivante :
```
http://localhost:8080/index.php
```
---

### Fonctionnalités du site web

Navigation grâce à la navbar pour se déplacer plus vite entre les différentes sections du site (sections produits, section contact...).

Possibilité d'afficher l'image en plus grand au milieu de sa section en cliquant dessus. Pour enlever l'image agrandie il suffit de cliquer sur la crois en haut à droite de celle-ci.

Pour afficher la description et le prix des articles il vous suffit de survoler l'image.

Possibilité de changer la quantité de produits à acheter en cliquant sur les boutons ```+``` et ```-```. La quantité s'affiche entre les boutons.

Pour afficher le panier vous devez être connecter au site, si ce n'est pas le cas le bouton de panier vous renvois directement vers la page de Connexion.
Une fois connecter il vous suffirat de recliquer sur l'icon de Panier et il apparaîtrat à la place de la section d'accueil.

Pour se connecter, deux utilisteurs sont déjà définis dans la BDD : 
```
login : admin
password : admin
```
ou
```
login : user
password : password
```
Si vous rentrez des mauvaises informations de connexion une erreur est générée. 
Si vous n'avez pas encore de compte vous pourrez alors accéder à la page d'inscription depuis la page de connexion et vous créer un compte. Ainsi vos identifiants seront automatiquement enregistrés dans la BDD et la prochaine fois vous n'aurez plus qu'à vous connecter.

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

### Les fichiers style.css

Les fichiers ```.css``` se trouve dans le dossier ```css/``` et contiennent tout le design du site. Le dossier ```css/``` contient également le dossier ```font/``` qui contient les polices d'écritures utilisées dans le site web.

---

### Le fichier index.php

Le fichier ```index.php``` se trouve à la racine du projet et contient les inclusions des fichiers ```header.php```, ```contenu.php``` et ```footer.php```.  
Il est relié au fichier ```style.css``` et au fichier ```main.js``` et utilise les images qui se trouvent dans le dossier ```img/```.

---

### Le fichier cat.json

Le fichier ```cat.json``` se trouve dans le dossier ```json/``` et contient toutes les informations des articles.

---

### Les fichiers .sql

Les fichiers ```.sql``` se trouvent dans le dossier ```mysql/``` et contiennent les scripts de création de la base de données et de ses tables.

---

### Les fichiers .php

Les fichiers ```.php``` se trouvent dans le dossier ```php/``` et contiennent la factorisation du code ```html``` et les différentes requêtes ```php``` nécessaires au site.

---

