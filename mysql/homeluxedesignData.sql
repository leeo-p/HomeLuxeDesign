-- Sélectionne la base de données
USE homeluxedesign;

-- Supprimer la table si elle existe déjà
DROP TABLE IF EXISTS produits;

-- Table "produits"
CREATE TABLE produits (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,              -- Champ pour l'ID du produit
    img VARCHAR(255) NOT NULL,                                  -- Champ pour le chemin de l'image
    nom VARCHAR(255) NOT NULL,                                  -- Champ pour le nom du produit
    prix INT(6) NOT NULL                                        -- Champ pour le prix du produit
);

-- Parcours du fichier JSON pour insérer les données dans la table
SET @json = LOAD_FILE('/path/to/products.json');                -- Charge le contenu du fichier JSON dans une variable
SET @salon = JSON_EXTRACT(@json, '$.salon');                    -- Extrait la liste des produits de la catégorie "salon"
SET @cuisine = JSON_EXTRACT(@json, '$.cuisine');                -- Extrait la liste des produits de la catégorie "cuisine"
SET @sdb = JSON_EXTRACT(@json, '$.sdb');                        -- Extrait la liste des produits de la catégorie "sdb"

-- Insertion des produits de la catégorie "salon"
SET @i = 0;                                                     -- Initialise un compteur pour l'ID du produit
WHILE JSON_CONTAINS(@salon, JSON_OBJECT('id', @i+1)) DO         -- Tant que le JSON contient un produit avec l'ID courant
    SET @prod = JSON_EXTRACT(@salon, CONCAT('$[', @i, ']'));    -- Extrait les données du produit courant
    INSERT INTO produits (img, nom, prix) 
    VALUES (JSON_EXTRACT(@prod, '$.img'), 
            JSON_EXTRACT(@prod, '$.nom'), 
            JSON_EXTRACT(@prod, '$.prix'));                     -- Insère les données dans la table
    SET @i = @i + 1;                                            -- Incrémente l'ID du produit
END WHILE;

-- Insertion des produits de la catégorie "cuisine"
SET @i = 0;                                                     -- Réinitialise le compteur pour l'ID du produit
WHILE JSON_CONTAINS(@cuisine, JSON_OBJECT('id', @i+1)) DO       -- Tant que le JSON contient un produit avec l'ID courant
    SET @prod = JSON_EXTRACT(@cuisine, CONCAT('$[', @i, ']'));  -- Extrait les données du produit courant
    INSERT INTO produits (img, nom, prix) 
    VALUES (JSON_EXTRACT(@prod, '$.img'), 
            JSON_EXTRACT(@prod, '$.nom'), 
            JSON_EXTRACT(@prod, '$.prix'));                     -- Insère les données dans la table
    SET @i = @i + 1;                                            -- Incrémente l'ID du produit
END WHILE;

-- Insertion des produits de la catégorie "sdb"
SET @i = 0;                                                     -- Réinitialise le compteur pour l'ID du produit
WHILE JSON_CONTAINS(@sdb, JSON_OBJECT('id', @i+1)) DO           -- Tant que le JSON contient un produit avec l'ID courant
    SET @prod = JSON_EXTRACT(@sdb, CONCAT('$[', @i, ']'));      -- Extrait les données du produit courant
    INSERT INTO produits (img, nom, prix) 
    VALUES (JSON_EXTRACT(@prod, '$.img'), 
            JSON_EXTRACT(@prod, '$.nom'), 
            JSON_EXTRACT(@prod, '$.prix'));                     -- Insère les données dans la table
    SET @i = @i + 1;                                            -- Incrémente l'ID du produit
END WHILE;

