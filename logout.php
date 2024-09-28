<?php include 'layout.php' ?>
<?php include 'header.php' ?>

<body>
    <main>
        <section class ="main-container">
            <div id="logout-flex-container" class="flex-container">
                <h1>Déconnexion</h1>
                <p>Voulez-vous vous déconnecter ?</p>
                <div class="logout-content">

        <!-- Bouton "oui" qui redirigera vers la page d'accueil déconnectée-->

                    <a class="logout-a" href="index.php">
                        <button class="submit-button">Oui</button>
                    </a>
        <!-- Bouton "non"  retour arrière-->
                    
                    <a class="logout-a" href="javascript:history.back()">
                        <button id="go-back" class="submit-button">Non</button>
                    </a>
                </div>
            </div>
            
        </section>
    </main>


    <?php include 'footer.php' ?>


</body>