<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Inscription</title>
        <link rel="stylesheet" href="../css/styleOfConnexion.css">
    </head>
    <body>
        <a href="../index.php"><img class="logoC" src="../img/logo.webp" alt="image"></a>
        <h1 class="titrePDC">HomeLuxeDesign</h1>
        <img class="fond" src="../img/fond.jpg" alt="fond">
        <div class="login-box">
            <h2>INSCRIPTION</h2>

            <?php
                if (isset($_POST['login']) && isset($_POST['password'])) {
                    $login = $_POST['login'];
                    $password = $_POST['password'];
                    $bdd = new PDO('mysql:host=localhost;dbname=homeluxedesign;charset=utf8', 'root', 'eithooghoi9%W');
                    
                    // Vérifier si l'utilisateur existe déjà dans la base de données
                    $existingUser = $bdd->prepare('SELECT * FROM users WHERE login = :login');
                    $existingUser->execute(['login' => $login]);
                    $userExists = $existingUser->rowCount() > 0;
                    
                    if ($userExists) {
                        // Si l'utilisateur existe déjà dans la base de données, afficher un message d'erreur
                        echo '<p class="error">Cet utilisateur existe déjà.</p>';
                    } else {
                        // Si l'utilisateur n'existe pas, l'ajouter à la base de données
                        $req = $bdd->prepare('INSERT INTO users (login, password) VALUES (:login, :password)');
                        $req->execute([
                            'login' => $login,
                            'password' => $password
                        ]);
                        $_SESSION['login'] = $login;
                        $_SESSION['password'] = $password;
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
                <!-- Bouton vers la page de connexion -->
                <a href="connexion.php">
                    <input class="inscription" type="button" value="Se connecter">
                </a>
            </form>    
        </div>
    </body>
</html>