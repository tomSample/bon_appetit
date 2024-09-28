<?php include 'layout.php'; ?>
<?php include 'header.php'; ?>

<!-- ===fin header=== -->

<!-- ===hero banner=== -->
<?php if ($isLoggedIn === false): ?>
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

    <?php else: ?>
        <body>
        <section class="hero-banner">
            <div class="hero-banner-text">
                <h1>Bon appétit !</h1>
                <p>Le bon resto au bon endroit</p>
            </div>
            <form>
                <input id="search-bar" type="search" placeholder="Entrez un restaurant ou un type de cuisine">
                <button class="submit-button" type="submit">Rechercher</button>
            </form>
        </section>

<!-- section des restos favoris -->

        <section class="main-container restaurant-container">
            <div class="restaurant-title">    
                <h2>Vos restaurants favoris</h2>
            </div>
            <div>
                <div class="restaurant-box">
                    <a href="restaurant.php">
                        <ul class="restaurant-id _borderradius10">
                            <li>
                                <img src="img\resto_template_1.jpg">
                            </li>
                            <li>
                                <p>Nom du restaurant 1</p>
                                <p><span class="star-icon">star</span>Excellent !</p>
                                <p>distance : 1km</p>
                            </li>
                        </ul>
                    </a>
                    <a href="restaurant.php">
                        <ul class="restaurant-id _borderradius10">
                            <li>
                                <img src="img\resto_template_1.jpg">
                            </li>
                            <li>
                                <p>Nom du restaurant 1</p>
                                <p><span class="star-icon">star</span>Excellent !</p>
                                <p>distance : 1km</p>
                            </li>
                        </ul>
                    </a>
                    <a href="restaurant.php">
                        <ul class="restaurant-id _borderradius10">
                            <li>
                                <img src="img\resto_template_1.jpg">
                            </li>
                            <li>
                                <p>Nom du restaurant 1</p>
                                <p><span class="star-icon">star</span>Excellent !</p>
                                <p>distance : 1km</p>
                            </li>
                        </ul>
                    </a>
                    <a href="restaurant.php">
                        <ul class="restaurant-id _borderradius10">
                            <li>
                                <img src="img\resto_template_1.jpg">
                            </li>
                            <li>
                                <p>Nom du restaurant 1</p>
                                <p><span class="star-icon">star</span>Excellent !</p>
                                <p>distance : 1km</p>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
        </section>

<!-- section des resto les mieux notés de la ville -->

        <section class="main-container restaurant-container">
            <div class="restaurant-title">    
                <h2>Les mieux notés</h2>
            </div>
            <div>
                <div class="restaurant-box">
                    <a href="restaurant.php">
                        <ul class="restaurant-id _borderradius10">
                            <li>
                                <img src="img\resto_template_1.jpg">
                            </li>
                            <li>
                                <p>Nom du restaurant 1</p>
                                <p><span class="star-icon">star</span>Excellent !</p>
                                <p>distance : 1km</p>
                            </li>
                        </ul>
                    </a>
                    <a href="restaurant.php">
                        <ul class="restaurant-id _borderradius10">
                            <li>
                                <img src="img\resto_template_2.jpg">
                            </li>
                            <li>
                                <p>Nom du restaurant 1</p>
                                <p><span class="star-icon">star</span>Excellent !</p>
                                <p>distance : 1km</p>
                            </li>
                        </ul>
                    </a>
                    <a href="restaurant.php">
                        <ul class="restaurant-id _borderradius10">
                            <li>
                                <img src="img\resto_template_1.jpg">
                            </li>
                            <li>
                                <p>Nom du restaurant 1</p>
                                <p><span class="star-icon">star</span>Excellent !</p>
                                <p>distance : 1km</p>
                            </li>
                        </ul>
                    </a>
                    <a href="restaurant.php">
                        <ul class="restaurant-id _borderradius10">
                            <li>
                                <img src="img\resto_template_1.jpg">
                            </li>
                            <li>
                                <p>Nom du restaurant 1</p>
                                <p><span class="star-icon">star</span>Excellent !</p>
                                <p>distance : 1km</p>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
        </section>

<!-- section des autres resto de la ville -->

<section class="main-container restaurant-container">
            <div class="restaurant-title">    
                <h2>Découvrez les resto de {nom ville}</h2>
            </div>
            <div>
            <div class="restaurant-box">
                    <a href="restaurant.php">
                        <ul class="restaurant-id _borderradius10">
                            <li>
                                <img src="img\resto_template_2.jpg">
                            </li>
                            <li>
                                <p>Nom du restaurant 1</p>
                                <p><span class="star-icon">star</span>Excellent !</p>
                                <p>distance : 1km</p>
                            </li>
                        </ul>
                    </a>
                    <a href="restaurant.php">
                        <ul class="restaurant-id _borderradius10">
                            <li>
                                <img src="img\resto_template_1.jpg">
                            </li>
                            <li>
                                <p>Nom du restaurant 1</p>
                                <p><span class="star-icon">star</span>Excellent !</p>
                                <p>distance : 1km</p>
                            </li>
                        </ul>
                    </a>
                    <a href="restaurant.php">
                        <ul class="restaurant-id _borderradius10">
                            <li>
                                <img src="img\resto_template_2.jpg">
                            </li>
                            <li>
                                <p>Nom du restaurant 1</p>
                                <p><span class="star-icon">star</span>Excellent !</p>
                                <p>distance : 1km</p>
                            </li>
                        </ul>
                    </a>
                    <a href="restaurant.php">
                        <ul class="restaurant-id _borderradius10">
                            <li>
                                <img src="img\resto_template_1.jpg">
                            </li>
                            <li>
                                <p>Nom du restaurant 1</p>
                                <p><span class="star-icon">star</span>Excellent !</p>
                                <p>distance : 1km</p>
                            </li>
                        </ul>
                    </a>
                </div>
                <div class="restaurant-box">
                    <a href="restaurant.php">
                        <ul class="restaurant-id _borderradius10">
                            <li>
                                <img src="img\resto_template_2.jpg">
                            </li>
                            <li>
                                <p>Nom du restaurant 1</p>
                                <p><span class="star-icon">star</span>Excellent !</p>
                                <p>distance : 1km</p>
                            </li>
                        </ul>
                    </a>
                    <a href="restaurant.php">
                        <ul class="restaurant-id _borderradius10">
                            <li>
                                <img src="img\resto_template_1.jpg">
                            </li>
                            <li>
                                <p>Nom du restaurant 1</p>
                                <p><span class="star-icon">star</span>Excellent !</p>
                                <p>distance : 1km</p>
                            </li>
                        </ul>
                    </a>
                    <a href="restaurant.php">
                        <ul class="restaurant-id _borderradius10">
                            <li>
                                <img src="img\resto_template_2.jpg">
                            </li>
                            <li>
                                <p>Nom du restaurant 1</p>
                                <p><span class="star-icon">star</span>Excellent !</p>
                                <p>distance : 1km</p>
                            </li>
                        </ul>
                    </a>
                    <a href="restaurant.php">
                        <ul class="restaurant-id _borderradius10">
                            <li>
                                <img src="img\resto_template_1.jpg">
                            </li>
                            <li>
                                <p>Nom du restaurant 1</p>
                                <p><span class="star-icon">star</span>Excellent !</p>
                                <p>distance : 1km</p>
                            </li>
                        </ul>
                    </a>
                </div>
            </div>
        </section>

<?php endif; ?>

<?php include 'footer.php'; ?>

    </body>
</html>