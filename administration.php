<?php include 'layout.php'; ?>
<?php include 'header.php'; ?>

<head>
        <link rel="stylesheet" href="styles\administration.css" type="text/css">
        <script src="./js/administration.js" defer></script>
    </head>

<body>

    <!-- ===main=== -->
      
    <section id="management" class="fields">
        <div class="container__title" id="management__title">
            <div class="section-header">
                <h1 class="invisible">Administration</h1>
            </div>
        </div>

    <!-- ===nav left=== -->

        <div class="container" id="views">
            <div class="grid" id="man__grid">
                <div class="grid__item__nav">
                    <ul class="grid_nav">
                        <li class="grid__admin__nav">
                            <a href="#" class="active" data-filter="shop">Restaurants</a>
                        </li>
                        <li class="grid__admin__nav">
                            <a href="#" data-filter="customer">Clients</a>
                        </li>
                        <li class="grid__admin__nav">
                            <a href="#" data-filter="table">Tableau de bord</a>
                        </li>
                        <li class="grid__admin__nav">
                            <a href="#" data-filter="report">Rapports</a>
                        </li>
                    </ul>
                </div>

    <!-- ===parts=== -->

                <div class="grid__item__view" id="man__shops">
                    <div class="search" id="man__search" data-category="shop">
                        <input class="search__views" id = "man__input" type="search" placeholder="Rechercher un restaurant">
                        <button class="submit-button" id="man__button" type="submit">Rechercher</button>
                    </div>
                    <div class="views__list">
                        <ui>
                            <li><a href="clients.html"></a>Restaurant 1, Ville
                            </li><!-- Lier le lien au restaurant affiché -->
                            <li><a href="clients.html"></a>Restaurant 2, Ville
                            </li>
                            <li><a href="clients.html"></a>Restaurant 3, Ville
                            </li>
                        </ui> 
                    </div>
                </div>

                <div class="grid__item__view" id="man__customers">
                    <div class="search" id="man__search" data-category="customer">
                        <input class="search__views" id = "man__input" type="search" placeholder="Rechercher un client">
                        <button class="submit-button" id="man__button" type="submit">Rechercher</button>
                    </div>
                    <div class="views__list">
                        <ui>
                            <li><a href="clients.html"></a>John Doe
                            </li><!-- Lier le lien à la personne affichée -->
                            <li><a href="clients.html"></a>Jane Tiger
                            </li>
                            <li><a href="clients.html"></a>Jean Paul
                            </li>
                        </ui> 
                    </div>
                </div>
                
                <div class="grid__item__view" id="man__tables">
                    <div class="search" id="man__search" data-category="table">
                        <input class="search__views" id = "man__input" type="search" placeholder="Rechercher une date">
                        <button class="submit-button" id="man__button" type="submit">Rechercher</button>
                    </div>
                    <div class="views__list">
                        <ui>
                            <li><a href="clients.html"></a>John Doe
                            </li><!-- Lier le lien à la personne affichée -->
                            <li><a href="clients.html"></a>Jane Tiger
                            </li>
                            <li><a href="clients.html"></a>Jean Paul
                            </li>
                        </ui> 
                    </div>
                </div>

                <div class="grid__item__view" id="man__reports">
                    <div class="search" id="man__search" data-category="report">
                        <input class="search__views" id = "man__input" type="search" placeholder="Rechercher une date">
                        <button class="submit-button" id="man__button" type="submit">Rechercher</button>
                    </div>
                    <div class="views__list">
                        <ui>
                            <li><a href="clients.html"></a>John Doe
                            </li><!-- Lier le lien à la personne affichée -->
                            <li><a href="clients.html"></a>Jane Tiger
                            </li>
                            <li><a href="clients.html"></a>Jean Paul
                            </li>
                        </ui> 
                    </div>
                </div>
            </div>
        </div>
        

    </section>

    <!-- ===fin main=== -->


    <!-- ===footer=== -->

    <?php include 'footer.php'; ?>

    <!-- ===fin footer=== -->
     
</body>