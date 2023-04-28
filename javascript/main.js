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

/* Fonction pour ajouter un article au panier */
function ajoutPanier(e) {
    const produit = e.parentElement.parentElement;             // Sélectionne le produit
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
    // Si l'article à déja été ajouté on augmente juste la quantité sinon on ajoute l'article
    if (contenu.querySelector('.imgPanier[src="' + img + '"]')) {
        const quantite = contenu.querySelector('.imgPanier[src="' + img + '"]').parentElement.querySelector('.quantitePanier');
        const qtePanier = parseInt(quantite.innerHTML.split(' ')[2]);
        quantite.innerHTML = 'Quantité : ' + (qtePanier + parseInt(qte));
        alert("L'article a bien été ajouté !")
        return;
    }
    const imgPanier = document.createElement('img');           // Crée une image
    imgPanier.classList.add('imgPanier');                      // Ajoute la classe .imgPanier à l'image
    imgPanier.src = img;                                       // Change l'image de l'image du produit
    produitPanier.appendChild(imgPanier);                      // Ajoute l'image au div
    contenu.appendChild(produitPanier);                        // Ajoute le div au contenu du panier
    
    // On ajoute la qauntité commandé au panier
    const quantite = document.createElement('p');
    quantite.classList.add('quantitePanier');
    quantite.innerHTML = 'Quantité : ' + qte;
    produitPanier.appendChild(quantite);

    // Charger le fichier JSON
    fetch("../json/cat.json")
        .then(response => response.json())
        .then(data => {
            // afficher data dans la console
            console.log(data);
            let colonne;
            for (const c in data[produit.dataset.cat]) {
                if (c.id == produit.dataset.id) {
                    colonne = c;
                    console.log(colonne)
                }
            }

            if (colonne === undefined) {
                return;
            }

            // colonne c’est ton objet javascript qui contient id, prix, …
            const prixTotal = colonne.prix * qte;
            const total = document.createElement('p');
            total.classList.add('total');
            total.innerHTML = 'Total : ' + prixTotal + '€';
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


