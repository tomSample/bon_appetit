<header>
    <nav>        
        <img class="header-logo" src="img\logo_bon_appetit.jpg" alt="">
        <div class="header-container">

        <!-- vérifie si la page visible par l'utilisateur est login.php -->

                <?php if ($currentPage == 'login.php') : ?>
                    <a href="index.php">
        <!-- affiche le bouton "Retour" dans le header -->
                        <button class="header-button">Retour à l'accueil</button>
                    </a>
                <?php endif; ?>

        <!-- vérifie si la page visible par l'utilisateur est forgotten-password.php -->

                <?php if ($currentPage == 'forgotten-password.php') :?>
                    <a href="index.php">
        <!-- affiche le bouton "Retour" dans le header -->
                        <button class="header-button">Retour à l'accueil</button>
                    </a>
                <?php endif; ?>


                <?php if ($currentPage == 'index.php') : ?>
                    <?php if ($isLoggedIn): ?>
                        <a href="moncompte.php">
                            <button class="header-button">Mon compte</button>
                        </a>
                    <a href="logout.php">
                        <button class="header-button">Se déconnecter</button>
                    </a>
                    <?php else: ?>
                        <a href="inscription.php">
                            <button class="header-button">Inscription</button>
                        </a>
                        <a href="login.php">
                            <button class="header-button">Connexion</button>
                        </a>
                    <?php endif; ?>
                <?php endif; ?>
        </div>
    </nav>
</header>