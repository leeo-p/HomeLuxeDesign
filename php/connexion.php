<?php
    session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>Connexion</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="../css/style.css">

    </head>
    <body>
        <a href="../index.php"><img class="logoC" src="../img/logo.webp" alt="image"></a>
        <h1 class="titrePDC">HomeLuxeDesign</h1>
        <img class="fond" src="../img/fond.jpg" alt="fond">
        <div class="login-box">
            <h2>CONNEXION</h2>

            <?php if (isset($erreur)): ?>
                <div class="erreur">
                    <?php switch ($erreur): case "login": ?>
                    Login inconnu
                    <?php break; case "password": ?>
                    Mot de passe invalide
                    <?php break; default: ?>
                    Erreur inconnue
                    <?php endswitch; ?>
                </div>
            <?php endif; ?>

            <form method="POST">
                <div class="user-box">
                    <input id="login" name="login" required>
                    <label for="login">Identifiant : </label>
                </div>
                <div class="user-box">
                    <input type="password" id="password" name="password" required>
                    <label for="password">Mot de Passe : </label>
                </div>
                <input class="submit" type="submit" value="Valider">

            </form>    
        </div>
    </body>
</html>