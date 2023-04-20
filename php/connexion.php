<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Connexion</title>
        <link rel="stylesheet" href="../css/styleOfConnexion.css">
    </head>
    <body>
        <a href="../index.php"><img class="logoC" src="../img/logo.webp" alt="image"></a>
        <h1 class="titrePDC">HomeLuxeDesign</h1>
        <img class="fond" src="../img/fond.jpg" alt="fond">
        <div class="login-box">
            <h2>CONNEXION</h2>

            <?php
                if (isset($_POST['login']) && isset($_POST['password'])) {
                    $login = $_POST['login'];
                    $password = $_POST['password'];
                    $bdd = new PDO('mysql:host=localhost;dbname=homeluxedesign;charset=utf8', 'root', '');
                    $req = $bdd->prepare('SELECT * FROM users WHERE login = :login AND password = :password');
                    $req->execute([
                        'login' => $login,
                        'password' => $password
                    ]);
                    $resultat = $req->fetch();
                    if (!$resultat) {
                        echo '<p class="error">Mauvais identifiant ou mot de passe !</p>';
                    } else {
                        $_SESSION['login'] = $resultat['login'];
                        $_SESSION['password'] = $resultat['password'];
                        header('Location: ../index.php');
                    }
                }
            ?>
                
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
                <!-- Bouton vers la page d'inscription -->
                <a href="inscription.php">
                    <input class="inscription" type="button" value="S'inscrire">
                </a>
            </form>
        </div>
    </body>
</html>