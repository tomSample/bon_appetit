<header>
    <nav>        
        <a href="index.php">
            <img class="header-logo" src="img\logo\logo chef hat.png" alt="">
        </a>
        <div class="header-container">

        <!-- vérifie si la page visible par l'utilisateur est login.php -->

                <?php if ($currentPage == 'login.php') : ?>
                    <a href="index.php">
        <!-- affiche le bouton "Retour" dans le header -->
                        <button class="header-button-2">Retour à l'accueil</button>
                    </a>
                <?php endif; ?>


        <!-- vérifie si la page visible par l'utilisateur est forgotten-password.php -->

                <?php if ($currentPage == 'forgotten-password.php') :?>
                    <a href="index.php">
        <!-- affiche le bouton "Retour" dans le header -->
                        <button class="header-button-2">Retour à l'accueil</button>
                    </a>
                <?php endif; ?>


        <!-- vérifie si la page visible par l'utilisateur est login.php -->

        <?php if ($currentPage == 'inscription.php') : ?>
                    <a href="index.php">
        <!-- affiche le bouton "Retour" dans le header -->
                        <button class="header-button-2">Retour à l'accueil</button>
                    </a>
                <?php endif; ?>

        <!-- vérifie si la page visible par l'utilisateur est restaurant.php + s'il est connecté -->

        <?php if ($currentPage == 'index.php' || $currentPage == 'restaurant.php' || $currentPage == 'clients.php') : ?>
                    <?php if ($isLoggedIn): ?>
                        <a href="clients.php">
                            <button class="header-button-1">Mon compte</button>
                        </a>
                    <a href="logout.php">
                        <button class="header-button-2">Se déconnecter</button>
                    </a>
        <!-- et s'il n'est pas connecté : -->
                    <?php else: ?>
                        <a href="inscription.php">
                            <button class="header-button-1">Inscription</button>
                        </a>
                        <a href="login.php">
                            <button class="header-button-2">Connexion</button>
                        </a>
                    <?php endif; ?>
                <?php endif; ?>


            
        </div>
    </nav>
</header>