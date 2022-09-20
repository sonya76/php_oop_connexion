<header>
    <nav>
        <ul>
            <li><a href="index.php?page=accueil">Accueil</a></li>
            <li><a href="index.php?page=contact">Contact</a></li>
            <?php
            if (isset($_SESSION['loginUser'])) {
            ?>
                <li><strong><?= $_SESSION['loginUser'] ?></strong></li>
                <li><a href="index.php?page=logout">Logout</a></li>
            <?php } else { ?>
                <li><a href="index.php?page=inscription">Inscription</a></li>
                <li><a href="index.php?page=login">Login</a></li>
            <?php } ?>
        </ul>

    </nav>
</header>