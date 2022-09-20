<?php
if (!isset($_GET['id'])) {
    header('Location:./index.php');
}

$query = new Sql();
$requeteUser = 'SELECT * FROM utilisateurs where id_utilisateur=  :idUser';
// $query->prepare($requeteUser);

$querySelect = new Sql();
$users = $querySelect->lister($requete);

// dump($users);
?>
<form action="index.php?page=inscription" method="post">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="<?=$nom?>" />
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="<?=$prenom?>" />
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="text" id="mail" name="mail" value="<?=$mail?>" />
    </div>
    <div>
        <label for="password1">Mot de passe :</label>
        <input type="password" id="password1" name="password1" />
    </div>
    <div>
        <label for="password2">Mot de passe (vérification) :</label>
        <input type="password" id="password2" name="password2" />
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="frmInscription" />
</form>