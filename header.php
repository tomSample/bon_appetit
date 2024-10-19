<?php include 'items.php' ?>



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
                $currentPage =='administration.php' ||
                $currentPage =='create.php' ||
                $currentPage == 'inscription-restaurant.php') : ?>

        <!--  vérifie si l'utilisateur est connecté et s'il est admin -->

        <?php if ($isLoggedIn && $role === 'admin'): ?>
            <button onclick ="toggleDropdown()" id="header-dropdown-button"><span class="material-symbols-outlined">person</span><?php echo htmlspecialchars($username); ?>
                <div id="header-dropdown-container">
                    <a id="header-dropdown-link" href="clients.php">Mon compte</a>
                    <a id="header-dropdown-link" href="administration.php">Tableau de bord</a>
                    <a id="header-dropdown-link" href="create.php">Edition</a>
                    <a id="header-dropdown-link" href="logout-action.php">Déconnexion</a>
                </div>
            </button>
            <a>
                <button onclick="toggleDrawer()" id="toggle-drawer" class="header-button-1">Panier</button>
            </a> 

        <!--  sinon si l'utilisateur est connecté -->

        <?php elseif ($isLoggedIn) : ?>
            <button onclick ="toggleDropdown()" id="header-dropdown-button"><span class="material-symbols-outlined">person</span><?php echo htmlspecialchars($username); ?></button>
            <div id="header-dropdown-container">
                <a id="header-dropdown-link" href="clients.php">Mon compte</a>
                <a id="header-dropdown-link" href="logout-action.php">Déconnexion</a>
            </div>
            <a>
                <button onclick="toggleDrawer()" id="toggle-drawer" class="header-button-1">Panier</button>
            </a>      

        <!-- boutons en mobile -->

        <a href="clients.php">
            <button class="mobile-header-button">
                <span class="material-symbols-outlined">person</span>
            </button>
        </a>
        <a>
            <button onclick="toggleDrawer()" id="toggle-drawer" class="mobile-header-button">
                <span class="material-symbols-outlined">shopping_bag</span>
            </button>
        </a>
        <a href="logout-action.php">
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
            <a>
                <button onclick="toggleDrawer()" id="toggle-drawer" class="header-button-1">Panier</button>
            </a>

<!-- boutons en mobile -->
        <a href="inscription.php">
            <button class="mobile-header-button">
                <span class="material-symbols-outlined">person_add</span>
            </button>
        </a>
        <a>
            <button onclick="toggleDrawer()" id="toggle-drawer" class="mobile-header-button">
                <span class="material-symbols-outlined">shopping_bag</span>
            </button>
        </a>
        <a href="login.php">
            <button class="mobile-header-button">
                <span class="material-symbols-outlined">login</span></button>
        </a>
        <?php endif; ?>
    <?php endif; ?>

<!-- DRAWER -->

<div id="restaurant-drawer-overlay">
    <div id="restaurant-drawer-content">
        <div id="restaurant-drawer-box">
            <div id="restaurant-drawer-item-content">
                <?php
                //vérifier que le panier existe est n'est pas vide
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    // Display cart items
                    foreach ($_SESSION['cart'] as $item) {
                        echo "<div id='restaurant-drawer-cart-box'>
                                <div id='restaurant-drawer-item-details'>
                                    <div id='restaurant-drawer-item-name'>
                                        {$item['name']}
                                    </div>
                                    <div id='restaurant-drawer-item-quantity'>
                                        <button onclick=\"decreaseQuantity('{$item['id']}')\"><strong>-</strong></button>
                                        {$item['quantity']}
                                        <button onclick=\"increaseQuantity('{$item['id']}')\"><strong>+</strong></button>
                                    </div>
                                </div>
                                <div id='restaurant-drawer-item-price'>
                                    {$item['price']}€
                                </div>
                            </div>";
                    }
                } else {
                    // Display message if cart is empty
                    echo "<p>Votre panier est vide</p>";
                }
                ?>
            </div>
            <div id="drawer-button-box">
                <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) { ?>
                <a id="drawer-button-link" href="checkout.php" class="_borderradius10">Finaliser la commande</a> <?php } ?>
            </div>
        </div>
    </div>
    <div>
        <button onclick="toggleDrawer()" id="restaurant-button-close"><span class="material-symbols-outlined">close</span></button>
    </div>
</div>




            
        </div>
    </nav>
</header>
