<?php include 'layout.php'; ?>

<!-- ===header=== -->

        <header>
            <nav>        
            <img class="header-logo" src="img\logo_bon_appetit.jpg" alt="">
            <a href=index.php>
                <button class="header-button">Retour à l'accueil</button>
            </a>
            </nav>
        </header>

<!-- ===fin header=== -->

<!-- ===hero banner=== -->

<section class="hero-banner">
    <form>
        <input id="search-bar" type="search" placeholder="Entrez votre e-mail">
    </form>
    <form>
        <input id="search-bar" type="search" placeholder="Entrez votre mot de passe">
    </form>
    <a href=forgotten-password.php>Mot de passe oublié</a>
    <button class="submit-button" type="submit">Confirmer</button>
</section>

<!-- ===fin hero-banner=== -->

<!-- ===footer=== -->

<?php include 'footer.php'; ?>

<!-- ===fin footer=== -->

</body>
</html>