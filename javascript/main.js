/* Fonction changement de section dans la navbar */
function changeSection(e) {
    const boutton = document.querySelectorAll('.nav-button');  // Sélectionne tous les bouttons de la navbar
    boutton.forEach((boutton) => {                             // Pour chaque boutton
        boutton.classList.remove('actif');                     // Enlève la classe .actif
    });           
    e.classList.add('actif');                                  // Ajoute la classe .actif au boutton cliqué
}

/* Fonction pour modifier la quantité d'un produit */
function ajusteQuantite(e, signe) {                            // e = boutton cliqué, signe = + ou -
    const qte = e.parentElement.querySelector('.quantite');    // Sélectionne l'input de la quantité
    if ((signe === '+') && (qte.value < 10)) {                 // Si le signe est + et que la quantité est inférieure à 10
        qte.value++;                                           // Ajoute 1 à la quantité
    }   
    else if ((signe === '-') && (qte.value > 0)){              // Si le signe est - et que la quantité est supérieure à 0
            qte.value--;                                       // Enlève 1 à la quantité
    }
}

/* Fonction pour afficher l'image agrandie */
function afficheImgSalon(e) {
    const img = document.querySelector('.imgAgrandieSalon');   // Sélectionne l'image agrandie
    const zone = document.querySelector('.salon');             // Sélectionne la zone visible
    img.src = e.src;                                           // Change l'image de l'image agrandie
    img.style.display = 'block';                               // Affiche l'image agrandie
    const croix = document.querySelector('.croixSalon');       // Sélectionne la croix
    croix.style.display = 'block';                             // Affiche la croix
    zone.style.opacity = '0.1';                                // Change l'opacité de la zone visible 
}
//* Fonction pour enlever l'image agrandie */
function enleveImgSalon(e) {
    const img = document.querySelector('.imgAgrandieSalon');   // Sélectionne l'image agrandie
    img.style.display = 'none';                                // Enlève l'image agrandie
    const croix = document.querySelector('.croixSalon');       // Sélectionne la croix
    croix.style.display = 'none';                              // Enlève la croix
    const zone = document.querySelector('.salon');             // Sélectionne la zone visible
    zone.style.opacity = '1';                                  // Change l'opacité de la zone visible
}

/* Fonction pour afficher l'image agrandie */
function afficheImgCuisine(e) {
    const img = document.querySelector('.imgAgrandieCuisine'); // Sélectionne l'image agrandie
    const zone = document.querySelector('.cuisine');           // Sélectionne la zone visible
    img.src = e.src;                                           // Change l'image de l'image agrandie
    img.style.display = 'block';                               // Affiche l'image agrandie
    const croix = document.querySelector('.croixCuisine');     // Sélectionne la croix
    croix.style.display = 'block';                             // Affiche la croix
    zone.style.opacity = '0.1';                                // Change l'opacité de la zone visible 
}
/* Fonction pour enlever l'image agrandie */
function enleveImgCuisine(e) {
    const img = document.querySelector('.imgAgrandieCuisine'); // Sélectionne l'image agrandie
    img.style.display = 'none';                                // Enlève l'image agrandie
    const croix = document.querySelector('.croixCuisine');     // Sélectionne la croix
    croix.style.display = 'none';                              // Enlève la croix
    const zone = document.querySelector('.cuisine');           // Sélectionne la zone visible
    zone.style.opacity = '1';                                  // Change l'opacité de la zone visible
}

/* Fonction pour afficher l'image agrandie */
function afficheImgSdb(e) {
    const img = document.querySelector('.imgAgrandieSdb');     // Sélectionne l'image agrandie
    const zone = document.querySelector('.sdb');               // Sélectionne la zone visible
    img.src = e.src;                                           // Change l'image de l'image agrandie
    img.style.display = 'block';                               // Affiche l'image agrandie
    const croix = document.querySelector('.croixSdb');         // Sélectionne la croix
    croix.style.display = 'block';                             // Affiche la croix
    zone.style.opacity = '0.1';                                // Change l'opacité de la zone visible 
}
/* Fonction pour enlever l'image agrandie */
function enleveImgSdb(e) {
    const img = document.querySelector('.imgAgrandieSdb');     // Sélectionne l'image agrandie
    img.style.display = 'none';                                // Enlève l'image agrandie
    const croix = document.querySelector('.croixSdb');         // Sélectionne la croix
    croix.style.display = 'none';                              // Enlève la croix
    const zone = document.querySelector('.sdb');               // Sélectionne la zone visible
    zone.style.opacity = '1';                                  // Change l'opacité de la zone visible
}

/* Fonction pour afficher le stock */
function afficherStock(e) { 
    const stock = e.parentElement.querySelector('.stock');     // Sélectionne le stock
    if (stock.style.display === 'flex') {                      // Si le stock est affiché
        stock.style.display = 'none';                          // Enlève l'affichage du stock
    }      
    else {                                                     // Sinon
        stock.style.display = 'flex';                          // Affiche le stock
    }
}

/* Fonction pour afficher le panier */
function afficherPanier(e) {
    const panier = document.querySelector('.contenuPanier');   // Sélectionne le panier
    const section = document.querySelector('.accueil');        // Sélectionne la section visible

    if (panier.style.display === 'block') {                    // Si le panier est affiché
        panier.style.display = 'none';                         // Enlève l'affichage du panier
        section.style.opacity = '1';                           // Change l'opacité de la section visible
    }  
    else {                                                     // Sinon
        panier.style.display = 'block';                        // Affiche le panier
        section.style.opacity = '0';                           // Change l'opacité de la section visible
    }
}

/* Fonction pour supprimer un article du panier */
function supprimerArticlePanier(e) {
    const produit = e.parentElement.parentElement;              // Sélectionne le produit
    const contenu = produit.parentElement;                      // Sélectionne le contenu du panier
    const valeur = parseInt(total.innerHTML.split(' ')[2]);     // Récupère la valeur du total
    const prix = parseInt(produit.querySelector('.total').innerHTML.split(' ')[2]); // Récupère le prix de l'article
    const previousPrice = document.querySelector('.total');
    if (previousPrice) {
        valeur = +previousPrice.outerHTML.split('>')[1].split(' ')[2].split('€')[0];
        previousPrice.remove();
    } else {
        valeur = 0;
    }
    const total = document.createElement('p');
    total.classList.add('total');
    total.innerHTML = 'Total : ' + (valeur-prix) + '€';         // Change le total
    produit.remove();                                           // Supprime le produit
}

/* Fonction pour supprimer un article du panier */
function supprimerArticlePanier(e) {
    /* Acceder au srcELement de l'event */
    const produit = e.srcElement.parentElement.parentElement;  // Sélectionne le produit
    const valeurArticle = +e.srcElement.previousSibling.outerHTML.split(':')[1].split('€')[0];
    const contenu = produit.parentElement;                      // Sélectionne le contenu du panier
    const previousPrice = document.querySelector('.total');
    valeur = +previousPrice.outerHTML.split('>')[1].split(' ')[2].split('€')[0];
    previousPrice.remove();

    const total = document.createElement('p');
    total.classList.add('total');
    total.innerHTML = 'Total : ' + (valeur-valeurArticle) + '€';         // Change le total
    contenu.appendChild(total);
    e.srcElement.parentElement.remove();                        // Supprime le produit du panier
}

/* Fonction pour ajouter un article au panier */
function ajoutPanier(e) {
    const produit = e.parentElement.parentElement;             // Sélectionne le produit
    const categorie = produit.dataset.cat;                     // On récupère la catégorie du produit
    const qte = produit.querySelector('.quantite').value;      // Sélectionne la quantité du produit
    const img = produit.querySelector('.img_produit').src;     // Sélectionne l'image du produit
    const panier = document.querySelector('.contenuPanier');   // Sélectionne le panier
    const contenu = panier.querySelector('.tableauPanier');    // Sélectionne le contenu du panier
    const produitPanier = document.createElement('div');       // Crée un div
    produitPanier.classList.add('produitPanier');              // Ajoute la classe .produitPanier au div
    // Si la quantité = 0 on ajoute rien au panier
    if (qte == 0) {
        return;
    }
    // Charger le fichier JSON
    fetch("../json/cat.json")
        .then(response => response.json())
        .then(data => {
            let colonne;
            const previousPrice = document.querySelector('.total');
            const total = document.createElement('p');

            if (categorie === 'cuisine') {
                colonne = data.cuisine.find(a => a.id === +produit.dataset.id);
            } else if (categorie === 'sdb') {
                colonne = data.sdb.find(a => a.id === +produit.dataset.id);
            } else if (categorie === 'salon') {
                colonne = data.salon.find(a => a.id === +produit.dataset.id);
            }
            if (colonne === undefined) {
                return;
            }
            if (previousPrice) {
                valeur = +previousPrice.outerHTML.split('>')[1].split(' ')[2].split('€')[0];
                previousPrice.remove();
            } else {
                valeur = 0;
            }
                // Si l'article à déja été ajouté on augmente juste la quantité sinon on ajoute l'article
            if (contenu.querySelector('.imgPanier[src="' + img + '"]')) {
                // Ajoute l'image au div
                contenu.appendChild(produitPanier);  
                // Change le prix du produit
                const prixArticle = document.querySelector('.prixArticle');
                valeurArticle = parseInt(prixArticle.innerHTML.split(' ')[2].split('€')[0]);
                prixArticle.remove();
                const prix = document.createElement('p');
                prix.classList.add('prixArticle');
                prix.innerHTML = 'Prix : ' + (valeurArticle + (colonne.prix * qte)) + '€';
                produitPanier.appendChild(prix);
                const quantite = contenu.querySelector('.imgPanier[src="' + img + '"]').parentElement.querySelector('.quantitePanier');
                const qtePanier = parseInt(quantite.innerHTML.split(' ')[2]);
                quantite.innerHTML = 'Quantité : ' + (qtePanier + parseInt(qte));
            } else {
                // On ajoute la qauntité commandé au panier
                const imgPanier = document.createElement('img');           // Crée une image
                imgPanier.classList.add('imgPanier');                      // Ajoute la classe .imgPanier à l'image
                imgPanier.src = img;                                       // Change l'image de l'image du produit
                produitPanier.appendChild(imgPanier);                      // Ajoute l'image au div
                contenu.appendChild(produitPanier);    
                const prixArticle = document.createElement('p');
                prixArticle.classList.add('prixArticle');
                prixArticle.innerHTML = 'Prix : ' + colonne.prix*qte + '€';
                produitPanier.appendChild(prixArticle);
                const poubelle = document.createElement('img');
                poubelle.classList.add('poubelle');
                poubelle.src = '../img/trash.png';
                produitPanier.appendChild(poubelle);
                poubelle.addEventListener('click', supprimerArticlePanier);
                const quantite = document.createElement('p');
                quantite.classList.add('quantitePanier');
                quantite.innerHTML = 'Quantité : ' + qte;
                produitPanier.appendChild(quantite);

            }
            total.classList.add('total');
            total.innerHTML = 'Total : ' + (valeur+colonne.prix*qte) + '€';
            produitPanier.appendChild(total);
    });
    alert("L'article a bien été ajouté !")
}

/* Fonction pour vider entièrement le panier */
function viderPanier(e) {
    const contenu = e.parentElement.querySelector('.tableauPanier'); // Sélectionne le contenu du panier
    contenu.innerHTML = '';                                          // Vide le contenu du panier
}

/* Fonction pour revenir en haut de la page */
document.addEventListener('DOMContentLoaded', function() {
    const btn = document.querySelector('.backToTop');

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 800) {
            btn.style.display = 'block';
        } else {
            btn.style.display = 'none';
        }
    });

    btn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});


