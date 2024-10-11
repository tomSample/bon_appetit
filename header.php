<?php $username = $_SESSION['user_name'] ?? ''; ?>

<header>
    <nav>        
        <a href="index.php">
            <img class="header-logo" src="img\logo\logo chef hat.png" alt="">
        </a>
        <div class="header-container">


        <!-- vérifie si la page visible par l'utilisateur est restaurant.php + s'il est connecté -->

        <?php if ($currentPage == 'index.php' ||
                $currentPage == 'restaurant.php' ||
                $currentPage == 'clients.php' ||
                $currentPage == 'inscription.php' ||
                $currentPage == 'login.php' ||
                $currentPage =='forgotten-password.php' ||
                $currentPage =='logout.php'||
                $currentPage =='administration.php') : ?>
                    <?php if ($isLoggedIn): ?>
                        <a href="clients.php">
                            <button class="header-button-1"><span class="material-symbols-outlined">person</span><?php echo htmlspecialchars($username); ?></button>
                        </a>
                        <a href="shopping-cart.php">
                            <button class="header-button-1">Panier</button>
                        </a>
                        <a href="logout.php">
                        <button class="header-button-2">Se déconnecter</button>
                        </a>

                    <!-- boutons en mobile -->
                    <a href="clients.php">
                        <button class="mobile-header-button">
                            <span class="material-symbols-outlined">person</span>
                        </button>
                    </a>
                    <a href="shopping-cart.php">
                        <button class="mobile-header-button">
                            <span class="material-symbols-outlined">shopping_bag</span>
                        </button>
                    </a>
                    <a href="logout.php">
                        <button class="mobile-header-button">
                            <span class="material-symbols-outlined">logout</span></button>
                    </a>


        <!-- et s'il n'est pas connecté : -->
                    <?php else: ?>
                        <a href="inscription.php">
                            <button class="header-button-1">Inscription</button>
                        </a>
                        <a href="login.php">
                            <button class="header-button-2">Connexion</button>
                        </a>

        <!-- boutons en mobile -->
                    <a href="inscription.php">
                        <button class="mobile-header-button">
                            <span class="material-symbols-outlined">person_add</span>
                        </button>
                    </a>
                    <a href="shopping-cart.php">
                        <button class="mobile-header-button">
                            <span class="material-symbols-outlined">shopping_bag</span>
                        </button>
                    </a>
                    <a href="login.php">
                        <button class="mobile-header-button">
                            <span class="material-symbols-outlined">login</span></button>
                    </a>
                    <?php endif; ?>
                <?php endif; ?>


            
        </div>
    </nav>
</header>