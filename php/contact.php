<?php
    session_start();
    include 'varSession.inc.php';
?>

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