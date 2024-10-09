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
                        <input class="search__views" id = "shop__input" type="search" placeholder="Rechercher un restaurant">
                        <button class="submit-button" id="shop__button" type="submit">Rechercher</button>
                    </div>
                    <div class="add_shop">
                        <a src=""><i>Ajouter un restaurant</i></a>
                    </div>
                    <div class="views__list">
                        <ui>
                            <li><a href="#">Restaurant 1</a>, Ville <img class="change__icon" src="./img/icon/order.png"><img class="change__icon" src="./img/icon/cutlery.png"><img class="change__icon" src="./img/icon/editing.png"><img class="change__icon" src="./img/icon/delete.png">
                            </li><!-- Lier le lien au restaurant affiché -->
                            <li><a href="#">Restaurant 2</a>, Ville <img class="change__icon" src="./img/icon/order.png"><img class="change__icon" src="./img/icon/cutlery.png"><img class="change__icon" src="./img/icon/editing.png"><img class="change__icon" src="./img/icon/delete.png">
                            </li>
                            <li><a href="#">Restaurant 3</a>, Ville <img class="change__icon" src="./img/icon/order.png"><img class="change__icon" src="./img/icon/cutlery.png"><img class="change__icon" src="./img/icon/editing.png"><img class="change__icon" src="./img/icon/delete.png">
                            </li>
                        </ui> 
                    </div>
                </div>

                <div class="grid__item__view hide" id="man__customers">
                    <div class="search" id="man__search" data-category="customer">
                        <input class="search__views" id = "customer__input" type="search" placeholder="Rechercher un client">
                        <button class="submit-button" id="customer__button" type="submit">Rechercher</button>
                    </div>
                    <div class="views__list">
                        <ui>
                            <li><a href="clients.html">John Doe</a>
                            </li><!-- Lier le lien à la personne affichée -->
                            <li><a href="clients.html">Jane Tiger</a>
                            </li>
                            <li><a href="clients.html">Jean Paul</a>
                            </li>
                        </ui> 
                    </div>
                </div>
                
                <div class="grid__item__view hide" id="man__tables">
                    <div class="search" id="man__search" data-category="table">
                        <input class="search__views" id = "table__input" type="search" placeholder="Rechercher une date">
                        <button class="submit-button" id="table__button" type="submit">Rechercher</button>
                    </div>
                    <div class="filter__table" id="f__table">
                        <a href="#" class="active ft hide" d-filter="day">jour</a> <a href="#" class="ft" d-filter="week">semaine</a> <a href="#" class="ft" d-filter="month">mois</a> <a href="#" class="ft" d-filter="year">année</a>
                    </div>
                    <div class="views__list" id="view__table">
                        <ui class="ft" d-filter="day">
                            <li>Aujourd'hui, <a href="#">80% de couverts</a>, <a href="#">Trop bon !</a>, <a href="#">Restaurant 1</a>
                            </li><!-- Lier les liens à des rapports sur la performance (par exemple : couverts) -->
                            <li>Hier, <a href="#">60% de couverts</a>, <a href="#">Il va vraiment fa...</a>, <a href="#">Restaurant 4</a>
                            </li>
                            <li>06/10/2024, <a href="#">70% de couverts</a>, <a href="#">Je reviendrai dans ce f...</a>, <a href="#">Restaurant 3</a>
                            </li>
                        </ui> 
                    </div>
                    <div class="views__list hide">
                        <ui class="ft" d-filter="week">
                            <li>Cette semaine, <a href="#">80% de couverts</a>, <a href="#">Trop bon !</a>, <a href="#">Restaurant 1</a>
                            </li><!-- Lier les liens à des rapports sur la performance (par exemple : couverts) -->
                            <li>Semaine passée, <a href="#">60% de couverts</a>, <a href="#">Il va vraiment fa...</a>, <a href="#">Restaurant 4</a>
                            </li>
                            <li>06/10/2024, <a href="#">70% de couverts</a>, <a href="#">Je reviendrai dans ce f...</a>, <a href="#">Restaurant 3</a>
                            </li>
                        </ui> 
                    </div>
                    <div class="views__list hide">
                        <ui class="ft" d-filter="month">
                            <li>Ce mois, <a href="#">80% de couverts</a>, <a href="#">Trop bon !</a>, <a href="#">Restaurant 1</a>
                            </li><!-- Lier les liens à des rapports sur la performance (par exemple : couverts) -->
                            <li>Mois passé, <a href="#">60% de couverts</a>, <a href="#">Il va vraiment fa...</a>, <a href="#">Restaurant 4</a>
                            </li>
                            <li>06/10/2024, <a href="#">70% de couverts</a>, <a href="#">Je reviendrai dans ce f...</a>, <a href="#">Restaurant 3</a>
                            </li>
                        </ui> 
                    </div>
                    <div class="views__list hide">
                        <ui class="ft" d-filter="year">
                            <li>Cette année, <a href="#">80% de couverts</a>, <a href="#">Trop bon !</a>, <a href="#">Restaurant 1</a>
                            </li><!-- Lier les liens à des rapports sur la performance (par exemple : couverts) -->
                            <li>Année passée, <a href="#">60% de couverts</a>, <a href="#">Il va vraiment fa...</a>, <a href="#">Restaurant 4</a>
                            </li>
                            <li>06/10/2024, <a href="#">70% de couverts</a>, <a href="#">Je reviendrai dans ce f...</a>, <a href="#">Restaurant 3</a>
                            </li>
                        </ui> 
                    </div>
                </div>

                <div class="grid__item__view hide" id="man__reports">
                    <div class="search" id="man__search" data-category="report">
                        <input class="search__views" id= "report__input" type="search" placeholder="Rechercher une date">
                        <button class="submit-button" id="report__button" type="submit">Rechercher</button>
                    </div>
                    <div class="filter__report" id="f__report">
                        <a href="#" class="active fr hide" r-filter="day">jour</a> <a href="#" class="fr" r-filter="week">semaine</a> <a href="#" class="fr" r-filter="month">mois</a> <a href="#" class="fr" r-filter="year">année</a>
                    </div>
                    <div class="views__list" r-filter="day">
                        <ui class="fr" r-filter="day">
                            <li>Aujourd'hui, 200k, 3 restaurants, 20€
                            </li>
                            <li>Hier, 200k, 3 restaurants, 18€
                            </li>
                            <li>06/10/2024, 150k, 2 restaurants, 25€
                            </li>
                        </ui> 
                    </div>
                    <div class="views__list hide" r-filter="week">
                        <ui class="fr" r-filter="week">
                            <li>Cette semaine, 200k, 3 restaurants, 20€
                            </li>
                            <li>Semaine passée, 200k, 3 restaurants, 18€
                            </li>
                            <li>06/10/2024, 150k, 2 restaurants, 25€
                            </li>
                        </ui> 
                    </div>
                    <div class="views__list hide" r-filter="month">
                        <ui class="fr" r-filter="month">
                            <li>Ce mois, 200k, 3 restaurants, 20€
                            </li>
                            <li>Mois passé, 200k, 3 restaurants, 18€
                            </li>
                            <li>06/10/2024, 150k, 2 restaurants, 25€
                            </li>
                        </ui> 
                    </div>
                    <div class="views__list hide" r-filter="year">
                        <ui class="fr" r-filter="year">
                            <li>Cette année, 200k, 3 restaurants, 20€
                            </li>
                            <li>Année passée, 200k, 3 restaurants, 18€
                            </li>
                            <li>06/10/2024, 150k, 2 restaurants, 25€
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

<!-- Crédits images -->
<!-- <a href="https://www.flaticon.com/free-icons/purchase" title="purchase icons">Purchase icons created by Osama Wajid Khan - Flaticon</a>
 <a href="https://www.flaticon.com/free-icons/restaurante" title="restaurante icons">Restaurante icons created by Aranagraphics - Flaticon</a>
 <a href="https://www.flaticon.com/free-icons/trash" title="trash icons">Trash icons created by Freepik - Flaticon</a> -->