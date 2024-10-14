<?php include 'layout.php'; ?>
<?php include 'header.php'; ?>

<!-- ===fin header=== -->

<!-- ===hero banner=== -->
<!-- si user n'est pasconnecté, affiche : -->
<?php if ($isLoggedIn === false): ?>
    <body>
        <section class="hero-banner">
            <div class="hero-banner-container">
                <div class="hero-banner-text">
                    <h1>Bon appétit !</h1>
                    <p>Le bon resto au bon endroit</p>
                </div>
                <form>
                    <input id="hero-search-bar" type="search" placeholder="Entrez une ville, une adresse et trouvez le bon resto">
                    <button class="hero-search-bar-button" type="submit">Rechercher</button>
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

<!-- si user est connecté, affiche : -->
    <?php else: ?>
        <body>
        <div class="body-padding">
            <section class="hero-banner">
                <div class="hero-banner-container">
                    <div class="hero-banner-text">
                        <h1>Bon appétit !</h1>
                        <p>Le bon resto au bon endroit</p>
                    </div>
                    <form>
                        <input id="hero-search-bar" type="search" placeholder="Entrez un restaurant ou un type de cuisine">
                        <button class="hero-search-bar-button" type="submit">Rechercher</button>
                    </form>
                </div>
            </section>

    <!-- filters -->

            <section>

                <div id="index-food-filter-container">

                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="fast-food" onclick="toggleFilter(this)">FAST-FOOD</button>
                    </div>
                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="italian" onclick="toggleFilter(this)">ITALIENNE</button>
                    </div>
                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="asian" onclick="toggleFilter(this)">ASIATIQUE</button>
                    </div>
                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="mexican" onclick="toggleFilter(this)">MEXICAINE</button>
                    </div>
                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="french" onclick="toggleFilter(this)">FRANCAISE</button>
                    </div>
                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="vegan" onclick="toggleFilter(this)">VEGAN</button>
                    </div>

                </div>

            </section>

    <!-- section des restos favoris -->

            <section class="main-container restaurant-container">
                <div class="restaurant-title">    
                    <h2>Votre restaurant favori</h2>
                </div>
                    <div class="restaurant-box">
                        <a class="restaurant-article-filter" data-category="fast-food" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="italian" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                </li>
                            </ul>
                        </a>                       
                        <a class="restaurant-article-filter" data-category="asian" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                </li>
                            </ul>
                        </a>
                    </div>
            </section>

    <!-- section des resto les mieux notés de la ville -->

            <section class="main-container restaurant-container">
                <div class="restaurant-title">    
                    <h2>Les mieux notés</h2>
                </div>
                <div class="restaurant-box">
                        <a class="restaurant-article-filter" data-category="fast-food" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="italian" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                </li>
                            </ul>
                        </a>                       
                        <a class="restaurant-article-filter" data-category="vegan" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="french" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="mexican" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="italian" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                </li>
                            </ul>
                        </a>                       
                        <a class="restaurant-article-filter" data-category="vegan" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="french" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                </li>
                            </ul>
                        </a>
                    </div>

            </section>

    <!-- section des autres resto de la ville -->

            <section class="main-container restaurant-container">
                <div class="restaurant-title">    
                    <h2>Découvrez les resto de {nom ville}</h2>
                </div>
                
                <div class="restaurant-box">
                        <a class="restaurant-article-filter" data-category="fast-food" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="italian" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                </li>
                            </ul>
                        </a>                       
                        <a class="restaurant-article-filter" data-category="vegan" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="french" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="mexican" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="italian" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                </li>
                            </ul>
                        </a>                       
                        <a class="restaurant-article-filter" data-category="vegan" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="french" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                </li>
                            </ul>
                        </a>
                    </div>

            </section>
        </div>

<?php endif; ?>

<?php include 'footer.php'; ?>

    </body>
</html>