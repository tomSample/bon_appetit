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
                </div>
            </div>
        </section>

        <section id="index-main-container">
            <div class="index-main-content">
                <div>
                    <img class="index-main-photo" src="img\livreuse_velo.jpeg">
                </div>
                <div class="index-main-text">
                    <h3>La livraison éthique</h3>
                    <p>Commandez en ligne et faites-vous livrer à vélo par des coursiers locaux, Lorem ipsum dolor sit amet consectetur 
                        adipisicing elit. Necessitatibus exercitationem facere illum. Ullam debitis nam facere velit? Voluptatibus a 
                        autem tenetur magnam dolores dolorum sit beatae rem ducimus repellat. Soluta.
                    </p> 
                </div>
            </div>

            <div id="index-main-content-2" class="index-main-content">
                <div class="index-main-text">
                    <h3>Les meilleurs restaurants</h3>
                    <p>Nous sélectionnons rigoureusement nos partenaires. Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Pariatur modi voluptatibus nobis ipsa, provident voluptatem amet quibusdam saepe ipsum nihil. Illum eos et 
                        soluta aperiam commodi velit. Repudiandae, rem est?
                    </p>
                </div>
                <div>
                    <img class="index-main-photo" src="img\cuisine.jpeg">
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

    <!-- filters dynamiue (carousel.js) -->

    <section>
    <div class="index-slides-container">
        <button id="index-slider-btn-prev" class ="index-slider-btn">&#10216;</button>
        <button id="index-slider-btn-next" class ="index-slider-btn"> &#10217;</button>
        <div class="index-slides-content"></div>
    </div>
</section>

    <!-- section des restos favoris -->

            <section class="main-container restaurant-container">
                <div class="restaurant-title">    
                    <h2>Mes favoris</h2>
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
                                    <p>type de cuisine</p>
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
                                    <p>type de cuisine</p>
                                </li>
                            </ul>
                        </a>                       
                        <a class="restaurant-article-filter" data-category="sushi" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                    <p>type de cuisine</p>
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
                                    <p>type de cuisine</p>
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
                                    <p>type de cuisine</p>
                                </li>
                            </ul>
                        </a>                       
                        <a class="restaurant-article-filter" data-category="tacos" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                    <p>type de cuisine</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="meat" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                    <p>type de cuisine</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="fast-food" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                    <p>type de cuisine</p>
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
                                    <p>type de cuisine</p>
                                </li>
                            </ul>
                        </a>                       
                        <a class="restaurant-article-filter" data-category="pretzel" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                    <p>type de cuisine</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="poke" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                    <p>type de cuisine</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="hot-dog" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                    <p>type de cuisine</p>
                                </li>
                            </ul>
                        </a>                       
                        <a class="restaurant-article-filter" data-category="tacos" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                    <p>type de cuisine</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="meat" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                    <p>type de cuisine</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="poutine" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                    <p>type de cuisine</p>
                                </li>
                            </ul>
                        </a>                       
                        <a class="restaurant-article-filter" data-category="pasta" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                    <p>type de cuisine</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="ramen" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                    <p>type de cuisine</p>
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
                                    <p>type de cuisine</p>
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
                                    <p>type de cuisine</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="after-tea" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                    <p>type de cuisine</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="pizza" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                    <p>type de cuisine</p>
                                </li>
                            </ul>
                        </a>                       
                        <a class="restaurant-article-filter" data-category="tacos" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                    <p>type de cuisine</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="meat" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                    <p>type de cuisine</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="falafel" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                    <p>type de cuisine</p>
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
                                    <p>type de cuisine</p>
                                </li>
                            </ul>
                        </a>                       
                        <a class="restaurant-article-filter" data-category="tacos" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                    <p>type de cuisine</p>
                                </li>
                            </ul>
                        </a>
                        <a class="restaurant-article-filter" data-category="meat" href="restaurant.php">
                            <ul class="restaurant-id">
                                <li>
                                    <img src="img\resto_template_1.jpg">
                                </li>
                                <li>
                                    <p>Nom du restaurant 1</p>
                                    <p><span class="material-symbols-outlined">star</span>Excellent !</p>
                                    <p>distance : 1km</p>
                                    <p>type de cuisine</p>
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