<?php include 'layout.php'; ?>

<!-- ===header=== -->

        <header>
            <nav>        
                <img class="header-logo" src="img/logo_bon_appetit.jpg" alt="">
                <button class="header-button" onclick="location.href='index.html';">Retour à l'accueil</button>
            </nav>
        </header>

<!-- ===fin header=== -->


<!-- ===hero banner=== -->

        <section class="hero-banner">
            <div>
                <h1>Inscription</h1>
                <p>Indiquez vos informations</p>
            </div>
            <form>
                <div class="register-button">
                    <input class="mail-search-bar" type="search" placeholder="Entrez votre e-mail">
                    <input class="password-search-bar" type="search" placeholder="Entrez votre mot de passe">
                    <input class="password-search-bar" type="search" placeholder="Confirmez votre mot de passe">
                    <button class="submit-button submit-button-inscription" type="submit">S'inscrire</button>
                </div>
            </form>
        </section>

<!-- ===fin hero-banner=== -->


<!-- ===footer=== -->
<?php include 'footer.php'; ?>
<!-- ===fin footer=== -->

    </body>
</html>