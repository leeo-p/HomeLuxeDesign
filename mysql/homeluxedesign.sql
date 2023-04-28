-- Supprimer la base de données si elle existe déjà
DROP DATABASE IF EXISTS homeluxedesign;

-- Créer la base de données
CREATE DATABASE homeluxedesign;

-- Utiliser la base de données
USE homeluxedesign;

-- Supprimer la table si elle existe déjà
DROP TABLE IF EXISTS users;

-- Créer la table users
CREATE TABLE users (
    login VARCHAR(255),
    password VARCHAR(255),
    id INTEGER,
    PRIMARY KEY (login)
);

-- Insérer des données dans la table users
INSERT INTO users VALUES ('admin', 'admin', '1');
INSERT INTO users VALUES ('user', 'password', '2');

