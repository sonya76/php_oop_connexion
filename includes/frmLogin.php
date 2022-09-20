<form action="index.php?page=login" method="post">
    <div>
        <label for="mail">e-mail :</label>
        <input type="text" id="mail" name="mail" value="<?= $mail ?>" required />
    </div>
    <div>
        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp" required />
    </div>
    <div>
        <input type="reset" value="Effacer" />
        <input type="submit" value="Envoyer" />
    </div>
    <input type="hidden" name="frmLogin" />
</form>