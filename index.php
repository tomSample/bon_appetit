<?php include 'layout.php'; ?>
<?php include 'header.php'; ?>

<!-- ===hero banner=== -->
<body>
    <section class="hero-banner">
        <div class="hero-banner-text">
            <h1>Bon appétit !</h1>
            <p class="hero-banner-subtitle">Le bon resto au bon endroit</p>
        </div>
        <div class="hero-banner-search">
            <p class="hero-banner-search-subtitle">Entrez une ville:</p>
            <form>
                <input id="search-bar" type="search" placeholder="Saisissez une ville">
                <button class="submit-button" type="submit">Rechercher</button>
            </form>
        </div>
    </section>

<!-- ===fin hero-banner=== -->

<!-- ===main=== -->

    <section class ="main">
        <div class="home-img-container">
            <div class="home-img-box">
                <img class="home-img" src ="img\chicken.jpg" alt="">
            </div>
            <div class="home-img-box">
                <img class="home-img" src ="img\seafood.jpg" alt="">
            </div>
            <div class="home-img-box">
                <img class="home-img" src ="img\thaifood.jpg" alt="">
            </div>
        </div>
    </section>
        
<!-- ===fin main=== -->

<?php include 'footer.php'; ?>

    </body>
</html>