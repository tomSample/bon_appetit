<?php include 'layout.php'; ?>
<?php include 'header.php'; ?>

<!-- ===fin header=== -->

<!-- ===hero banner=== -->
<body>
    <section class="hero-banner">
        <div class="hero-banner-text">
            <h1>Bon appétit !</h1>
            <p>Le bon resto au bon endroit</p>
        </div>
        <form>
            <input id="search-bar" type="search" placeholder="Entrez une ville, une adresse et trouvez le bon resto">
            <button class="submit-button" type="submit">Rechercher</button>
        </form>
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