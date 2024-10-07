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
                            <li><a href="clients.html"></a>Restaurant 1, Ville <img class="change__icon" src="./img/icon/order.png"><img class="change__icon" src="./img/icon/cutlery.png"><img class="change__icon" src="./img/icon/editing.png"><img class="change__icon" src="./img/icon/delete.png">
                            </li><!-- Lier le lien au restaurant affiché -->
                            <li><a href="clients.html"></a>Restaurant 2, Ville <img class="change__icon" src="./img/icon/order.png"><img class="change__icon" src="./img/icon/cutlery.png"><img class="change__icon" src="./img/icon/editing.png"><img class="change__icon" src="./img/icon/delete.png">
                            </li>
                            <li><a href="clients.html"></a>Restaurant 3, Ville <img class="change__icon" src="./img/icon/order.png"><img class="change__icon" src="./img/icon/cutlery.png"><img class="change__icon" src="./img/icon/editing.png"><img class="change__icon" src="./img/icon/delete.png">
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
                            <li><a href="clients.html"></a>John Doe
                            </li><!-- Lier le lien à la personne affichée -->
                            <li><a href="clients.html"></a>Jane Tiger
                            </li>
                            <li><a href="clients.html"></a>Jean Paul
                            </li>
                        </ui> 
                    </div>
                </div>
                
                <div class="grid__item__view hide" id="man__tables">
                    <div class="search" id="man__search" data-category="table">
                        <input class="search__views" id = "table__input" type="search" placeholder="Rechercher une date">
                        <button class="submit-button" id="table__button" type="submit">Rechercher</button>
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

                <div class="grid__item__view hide" id="man__reports">
                    <div class="search" id="man__search" data-category="report">
                        <input class="search__views" id = "report__input" type="search" placeholder="Rechercher une date">
                        <button class="submit-button" id="report__button" type="submit">Rechercher</button>
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

<!-- Crédits images -->
<!-- <a href="https://www.flaticon.com/free-icons/purchase" title="purchase icons">Purchase icons created by Osama Wajid Khan - Flaticon</a>
 <a href="https://www.flaticon.com/free-icons/restaurante" title="restaurante icons">Restaurante icons created by Aranagraphics - Flaticon</a>
 <a href="https://www.flaticon.com/free-icons/trash" title="trash icons">Trash icons created by Freepik - Flaticon</a> -->