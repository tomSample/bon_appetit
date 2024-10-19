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

            <section id="index-food-filter-main">

                <div id="index-food-filter-container">

                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="ramen" onclick="toggleFilter(this)">
                            <img id="index-food-filter-icon" src ="img\icon\ramen.png">
                        </button>
                    </div>
                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="churros" onclick="toggleFilter(this)">
                            <img id="index-food-filter-icon" src ="img\icon\churros.png">
                        </button>
                    </div>
                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="satay" onclick="toggleFilter(this)">
                            <img id="index-food-filter-icon" src ="img\icon\satay.png">
                        </button>
                    </div>
                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="pretzel" onclick="toggleFilter(this)">
                            <img id="index-food-filter-icon" src ="img\icon\pretzel.png">
                        </button>
                    </div>
                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="fast-food" onclick="toggleFilter(this)">
                            <img id="index-food-filter-icon" src ="img\icon\burger-sandwich.png">
                        </button>
                    </div>
                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="italian" onclick="toggleFilter(this)">
                            <img id="index-food-filter-icon" src ="img\icon\pizza.png">
                        </button>
                    </div>
                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="sushi" onclick="toggleFilter(this)">
                            <img id="index-food-filter-icon" src ="img\icon\sushi.png">
                        </button>
                    </div>
                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="falafel" onclick="toggleFilter(this)">
                            <img id="index-food-filter-icon" src ="img\icon\falafel.png">
                        </button>
                    </div>
                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="meat" onclick="toggleFilter(this)">
                            <img id="index-food-filter-icon" src ="img\icon\food.png">
                        </button>
                    </div>
                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="tacos" onclick="toggleFilter(this)">
                            <img id="index-food-filter-icon" src ="img\icon\tacos.png">
                        </button>
                    </div>
                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="poke" onclick="toggleFilter(this)">
                            <img id="index-food-filter-icon" src ="img\icon\poke.png">
                        </button>
                    </div>
                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="hot-dog" onclick="toggleFilter(this)">
                            <img id="index-food-filter-icon" src ="img\icon\hot-dog.png">
                        </button>
                    </div>
                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="pasta" onclick="toggleFilter(this)">
                            <img id="index-food-filter-icon" src ="img\icon\spaghetti.png">
                        </button>
                    </div>
                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="poutine" onclick="toggleFilter(this)">
                            <img id="index-food-filter-icon" src ="img\icon\poutine.png">
                        </button>
                    </div>
                    <div id="index-food-filter-content">
                        <button id="index-food-filter-button" data-category="after-tea" onclick="toggleFilter(this)">
                            <img id="index-food-filter-icon" src ="img\icon\afternoon-tea.png">
                        </button>
                    </div>

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
                        <a class="restaurant-article-filter" data-category="sushi" href="restaurant.php">
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
                        <a class="restaurant-article-filter" data-category="tacos" href="restaurant.php">
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
                        <a class="restaurant-article-filter" data-category="meat" href="restaurant.php">
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
                        <a class="restaurant-article-filter" data-category="falafel" href="restaurant.php">
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
                        <a class="restaurant-article-filter" data-category="tacos" href="restaurant.php">
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
                        <a class="restaurant-article-filter" data-category="meat" href="restaurant.php">
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
                        <a class="restaurant-article-filter" data-category="tacos" href="restaurant.php">
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
                        <a class="restaurant-article-filter" data-category="meat" href="restaurant.php">
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
                        <a class="restaurant-article-filter" data-category="falafel" href="restaurant.php">
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
                        <a class="restaurant-article-filter" data-category="tacos" href="restaurant.php">
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
                        <a class="restaurant-article-filter" data-category="meat" href="restaurant.php">
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