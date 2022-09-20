<h1>Login</h1>
<?php

if (isset($_POST['frmLogin'])) {
    $mail = htmlentities(trim($_POST['mail']));
    $mdp = htmlentities(trim($_POST['mdp']));

    $erreurs = array();

    if (mb_strlen($mail) === 0)
        array_push($erreurs, "Il manque votre e-mail");

    if (mb_strlen($mdp) === 0)
        array_push($erreurs, "Il manque votre mot de passe");

    if (count($erreurs)) {
        $messageErreur = "<ul>";

        for ($i = 0; $i < count($erreurs); $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }

        $messageErreur .= "</ul>";

        echo $messageErreur;
        include './includes/frmLogin.php';
    } else {
        $requeteLogin = "SELECT password FROM utilisateurs WHERE mail='$mail'";
        $sqlLogin = new Sql();
        $resultatLogin = $sqlLogin->lister($requeteLogin);

        if (count($resultatLogin) > 0) {
            // Traitement pour vérifier le mot de passe
            $resultatPassword = $resultatLogin[0]['password'];

            if (password_verify($mdp, $resultatPassword)) {
                $message = "Vous êtes connecté";
                $_SESSION['login'] = true;

                $messageEmail = $mail . ' vous êtes connecté !';
                sendEmail($mail, 'contact@ceppic-php-file-rouge.fr', 'Login Success', $messageEmail);
            } else {
                $message = "Erreur d'authentification";
                $_SESSION['login'] = false;
            }
        } else {
            $message = "Votre adresse n'est pas dans la base";
        }

        echo $message;

        $url = $_SERVER['HTTP_ORIGIN'] . dirname($_SERVER['REQUEST_URI']) . "/";

        echo redirection($url, 2000);
        echo "<p><a href=\"$url\">Revenir à la page d'accueil</a></p>";
    }
} else {
    $mail = "";
    include './includes/frmLogin.php';
}
