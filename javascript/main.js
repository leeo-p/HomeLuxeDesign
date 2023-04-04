// Fonction changement de section dans la navbar
function changeSection(e) {
    const boutton = document.querySelectorAll('.nav-button'); // Sélectionne tous les bouttons de la navbar
    boutton.forEach((boutton) => {                  // Pour chaque boutton
        boutton.classList.remove('actif');          // Enlève la classe .actif
    });
    e.classList.add('actif');                       // Ajoute la classe .actif au boutton cliqué
    
    // Changement du contenu de la div .droite
    const content = document.querySelectorAll('.to-change'); // Sélectionne tous les éléments à changer
    content.forEach((section) => {                  // Pour chaque élément
        if (!section.classList.contains(e.id)) {    // Si l'élément ne contient pas l'id du boutton cliqué
            section.classList.remove('visible');    // Enlève la classe .visible
        }
        else {                                      // Sinon
            section.classList.add('visible');       // Ajoute la classe .visible
        }
    });
}

// Fonction pour modifier la quantité d'un produit
function ajusteQuantite(e, signe) {                     // e = boutton cliqué, signe = + ou -
    const qte = e.parentElement.querySelector('.quantite'); // Sélectionne l'input de la quantité
    if ((signe === '+') && (qte.value < 10)) {          // Si le signe est + et que la quantité est inférieure à 10
        qte.value++;                                    // Ajoute 1 à la quantité
    }
    else if ((signe === '-') && (qte.value > 0)){       // Si le signe est - et que la quantité est supérieure à 0
            qte.value--;                                // Enlève 1 à la quantité
    }
}

// Fonction pour afficher l'image agrandie
function afficheImg(e) {
    const img = document.querySelector('.imgAgrandie'); // Sélectionne l'image agrandie
    img.src = e.src;                                    // Change l'image de l'image agrandie
    img.style.display = 'block';                        // Affiche l'image agrandie
    const croix = document.querySelector('.croix');     // Sélectionne la croix
    croix.style.display = 'block';                      // Affiche la croix
    const zone = document.querySelector('.visible');    // Sélectionne la zone visible
    zone.style.opacity = '0.3';                         // Change l'opacité de la zone visible
}

// Fonction pour enlever l'image agrandie
function enleveImg(e) {
    const img = document.querySelector('.imgAgrandie'); // Sélectionne l'image agrandie
    img.style.display = 'none';                         // Enlève l'image agrandie
    const croix = document.querySelector('.croix');     // Sélectionne la croix
    croix.style.display = 'none';                       // Enlève la croix
    const zone = document.querySelector('.visible');    // Sélectionne la zone visible
    zone.style.opacity = '1';                           // Change l'opacité de la zone visible
}

// Fonction pour afficher le stock
function afficherStock(e) { 
    const stock = e.parentElement.querySelector('.stock'); // Sélectionne le stock
    if (stock.style.display === 'flex') {                  // Si le stock est affiché
        stock.style.display = 'none';                      // Enlève l'affichage du stock
    }
    else {                                                 // Sinon
        stock.style.display = 'flex';                      // Affiche le stock
    }
}

// Fonction pour afficher le panier
function afficherPanier(e) {
    const panier = document.querySelector('.contenuPanier'); // Sélectionne le panier
    const section = document.querySelector('.visible');      // Sélectionne la section visible
    if (panier.style.display === 'block') {                  // Si le panier est affiché
        panier.style.display = 'none';                       // Enlève l'affichage du panier
        section.style.opacity = '1';                         // Change l'opacité de la section visible
    }
    else {                                                   // Sinon
        panier.style.display = 'block';                      // Affiche le panier
        section.style.opacity = '0';                         // Change l'opacité de la section visible
    }
}







