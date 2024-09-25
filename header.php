<header>
    <nav>        
        <img class="header-logo" src="img\logo_bon_appetit.jpg" alt="">
        <div class="header-container">


<!-- si l'utilisateur est connecté, le header affiche -->

            <?php if ($isLoggedIn): ?>
                <a href="moncompte.php">
                    <button class="header-button">Mon Compte</button>
                </a>
                <a href="logout.php">
                    <button class="header-button">Déconnexion</button>
                </a>
                            
<!-- sinon il affiche: -->

            <?php else: ?>
                <a href=inscription.php>
                    <button class="header-button">Inscription</button>
                </a>
                <a href=login.php>
                    <button class="header-button">Connexion</button>
                </a>

<!-- sauf si il est sur la page login.php, il affichera : -->

                <?php if ($currentPage == 'login.php') : ?>
                    <a href=index.php>
                        <button class="header-button">Retour à l'accueil</button>
                    </a>
                <?php endif; ?>

<!-- sauf si il est sur la page forgotten-password.php, il affichera : -->

                <?php if ($currentPage == 'forgotten-password.php') :?>
                    <a href=index.php>
                        <button class="header-button">Retour à l'accueil</button>
                    </a>
                    
                <?php endif; ?>
            <?php endif; ?>
        </div>
    </nav>
</header>