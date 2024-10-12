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
                        <input class="search__views" id="shop__input" type="search" placeholder="Rechercher un restaurant">
                        <button class="submit-button" id="shop__button" type="submit">Rechercher</button>
                    </div>
                    <div class="add_shop">
                        <a src=""><i>Ajouter un restaurant</i></a>
                    </div>
                    <div class="views__list">
                        <div class="data__shop">

                            <div class="wrapTable">
                                <div class="tableHeader">
                                    <div class="col1 iteman"><span>Restaurant</span></div>
                                    <div class="col2 iteman"><span>Ville</span></div>
                                    <div class="col3 iteman"><span>Flux</span></div>
                                    <div class="col4 iteman"><span>Couverts</span></div>
                                    <div class="col5 iteman"><span></span></div>
                                    <div class="col6 iteman"><span></span></div>
                                </div>
                                <div class="tableBody">
                                    <div class="oneRow">
                                        <div class="iteman col1">
                                            <div class="description">
                                                <p class="name"><a target="_blank" href="#">Aux plaisirs gustatifs</a></p>
                                            </div>
                                        </div>
                                        <div class="iteman col2"><span>Lannion</span></div>
                                        <div class="iteman col3"><img class="change__icon" src="./img/icon/order.png"></span></div>
                                        <div class="iteman col4"><img class="change__icon" src="./img/icon/cutlery.png"></div>
                                        <div class="iteman col5"><img class="change__icon" src="./img/icon/editing.png"></div>
                                        <div class="iteman col6"><img class="change__icon" src="./img/icon/delete.png"></div>
                                    </div>
                                    <div class="oneRow">
                                        <div class="iteman col1">
                                            <div class="description">
                                                <p class="name"><a target="_blank" href="#">Mangez-nous</a></p>
                                            </div>
                                        </div>
                                        <div class="iteman col2"><span>Saint-Jacques-en-champagne</span></div>
                                        <div class="iteman col3"><img class="change__icon" src="./img/icon/order.png"></span></div>
                                        <div class="iteman col4"><img class="change__icon" src="./img/icon/cutlery.png"></div>
                                        <div class="iteman col5"><img class="change__icon" src="./img/icon/editing.png"></div>
                                        <div class="iteman col6"><img class="change__icon" src="./img/icon/delete.png"></div>
                                    </div>
                                    <div class="oneRow">
                                        <div class="iteman col1">
                                            <div class="description">
                                                <p class="name"><a target="_blank" href="#">La bonne fourchette</a></p>
                                            </div>
                                        </div>
                                        <div class="iteman col2"><span>Lannion</span></div>
                                        <div class="iteman col3"><img class="change__icon" src="./img/icon/order.png"></span></div>
                                        <div class="iteman col4"><img class="change__icon" src="./img/icon/cutlery.png"></div>
                                        <div class="iteman col5"><img class="change__icon" src="./img/icon/editing.png"></div>
                                        <div class="iteman col6"><img class="change__icon" src="./img/icon/delete.png"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="grid__item__view hide" id="man__customers">
                    <div class="search" id="man__search" data-category="customer">
                        <input class="search__views" id="customer__input" type="search" placeholder="Rechercher un client">
                        <button class="submit-button" id="customer__button" type="submit">Rechercher</button>
                    </div>
                    <div class="views__list">
                        <ui>
                            <p id="z">Clients</p>
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
                        <input class="search__views" id="table__input" type="search" placeholder="Rechercher une date"> 
                        <button class="submit-button" id="table__button" type="submit">Rechercher</button>
                    </div>
                    <div class="filter__table" id="f__table">
                        <p>Filtrer par <a href="#" class="active ft hide" d-filter="day">jour</a> <a href="#" class="ft" d-filter="week">semaine</a> <a href="#" class="ft" d-filter="month">mois</a> <a href="#" class="ft" d-filter="year">année</a></p>
                    </div>
                    <div class="views__list" id="view__table">
                        <div class="ft" d-filter="day">
                            <div class="wrapTable">
                                    <div class="tableHeader">
                                        <div class="col1 iteman"><span>Jour</span></div>
                                        <div class="col2 iteman"><span>Flux</span></div>
                                        <div class="col3 iteman"><span>Avis</span></div>
                                        <div class="col4 iteman"><span>Top restaurant</span></div>
                                    </div>
                                    <div class="tableBody">
                                        <div class="oneRow">
                                            <div class="iteman col1">
                                                <div class="description">
                                                    <p class="name"><a target="_blank" href="#">Aujourd'hui</a></p>
                                                </div><!-- Lier les liens à des rapports sur la performance (par exemple : couverts) -->
                                            </div>
                                            <div class="iteman col2"><span><a href="#">80% de couverts</a></span></div>
                                            <div class="iteman col3"><span><a href="#">Trop bon !</a></span></div>
                                            <div class="iteman col4"><span><a href="#">Restaurant 1</a></span></div>
                                        </div>
                                        <div class="oneRow">
                                            <div class="iteman col1">
                                                <div class="description">
                                                <p class="name"><a target="_blank" href="#">Hier</a></p>
                                                </div>
                                            </div>
                                            <div class="iteman col2"><span><a href="#">60% de couverts</a></span></div>
                                            <div class="iteman col3"><span><a href="#">Il va vraiment fa...</a></span></div>
                                            <div class="iteman col4"><span><a href="#">Restaurant 4</a></span></div>
                                        </div>
                                        <div class="oneRow">
                                            <div class="iteman col1">
                                                <div class="description">
                                                <p class="name"><a target="_blank" href="#">06/10/2024</a></p>
                                                </div>
                                            </div>
                                            <div class="iteman col2"><span><a href="#">70% de couverts</a></span></div>
                                            <div class="iteman col3"><span><a href="#">Je reviendrai dans ce f...</a></span></div>
                                            <div class="iteman col4"><span><a href="#">Restaurant 3</a></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="views__list hide">
                            <div class="ft" d-filter="week">
                                <div class="wrapTable">
                                        <div class="tableHeader">
                                            <div class="col1 iteman"><span>Semaine</span></div>
                                            <div class="col2 iteman"><span>Flux</span></div>
                                            <div class="col3 iteman"><span>Avis</span></div>
                                            <div class="col4 iteman"><span>Top restaurant</span></div>
                                        </div>
                                        <div class="tableBody">
                                            <div class="oneRow">
                                                <div class="iteman col1">
                                                    <div class="description">
                                                        <p class="name"><a target="_blank" href="#">Cette semaine</a></p>
                                                    </div><!-- Lier les liens à des rapports sur la performance (par exemple : couverts) -->
                                                </div>
                                                <div class="iteman col2"><span><a href="#">80% de couverts</a></span></div>
                                                <div class="iteman col3"><span><a href="#">Trop bon !</a></span></div>
                                                <div class="iteman col4"><span><a href="#">Restaurant 1</a></span></div>
                                            </div>
                                            <div class="oneRow">
                                                <div class="iteman col1">
                                                    <div class="description">
                                                    <p class="name"><a target="_blank" href="#">Semaine passée</a></p>
                                                    </div>
                                                </div>
                                                <div class="iteman col2"><span><a href="#">60% de couverts</a></span></div>
                                                <div class="iteman col3"><span><a href="#">Il va vraiment fa...</a></span></div>
                                                <div class="iteman col4"><span><a href="#">Restaurant 4</a></span></div>
                                            </div>
                                            <div class="oneRow">
                                                <div class="iteman col1">
                                                    <div class="description">
                                                    <p class="name"><a target="_blank" href="#">06/10/2024</a></p>
                                                    </div>
                                                </div>
                                                <div class="iteman col2"><span><a href="#">70% de couverts</a></span></div>
                                                <div class="iteman col3"><span><a href="#">Je reviendrai dans ce f...</a></span></div>
                                                <div class="iteman col4"><span><a href="#">Restaurant 3</a></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                        <div class="views__list hide">
                            <div class="ft" d-filter="month">
                                <div class="wrapTable">
                                        <div class="tableHeader">
                                            <div class="col1 iteman"><span>Mois</span></div>
                                            <div class="col2 iteman"><span>Flux</span></div>
                                            <div class="col3 iteman"><span>Avis</span></div>
                                            <div class="col4 iteman"><span>Top restaurant</span></div>
                                        </div>
                                        <div class="tableBody">
                                            <div class="oneRow">
                                                <div class="iteman col1">
                                                    <div class="description">
                                                        <p class="name"><a target="_blank" href="#">Ce mois</a></p>
                                                    </div><!-- Lier les liens à des rapports sur la performance (par exemple : couverts) -->
                                                </div>
                                                <div class="iteman col2"><span><a href="#">80% de couverts</a></span></div>
                                                <div class="iteman col3"><span><a href="#">Trop bon !</a></span></div>
                                                <div class="iteman col4"><span><a href="#">Restaurant 1</a></span></div>
                                            </div>
                                            <div class="oneRow">
                                                <div class="iteman col1">
                                                    <div class="description">
                                                    <p class="name"><a target="_blank" href="#">Mois passé</a></p>
                                                    </div>
                                                </div>
                                                <div class="iteman col2"><span><a href="#">60% de couverts</a></span></div>
                                                <div class="iteman col3"><span><a href="#">Il va vraiment fa...</a></span></div>
                                                <div class="iteman col4"><span><a href="#">Restaurant 4</a></span></div>
                                            </div>
                                            <div class="oneRow">
                                                <div class="iteman col1">
                                                    <div class="description">
                                                    <p class="name"><a target="_blank" href="#">06/10/2024</a></p>
                                                    </div>
                                                </div>
                                                <div class="iteman col2"><span><a href="#">70% de couverts</a></span></div>
                                                <div class="iteman col3"><span><a href="#">Je reviendrai dans ce f...</a></span></div>
                                                <div class="iteman col4"><span><a href="#">Restaurant 3</a></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                        <div class="views__list hide">
                            <div class="ft" d-filter="year">
                                <div class="wrapTable">
                                        <div class="tableHeader">
                                            <div class="col1 iteman"><span>Année</span></div>
                                            <div class="col2 iteman"><span>Flux</span></div>
                                            <div class="col3 iteman"><span>Avis</span></div>
                                            <div class="col4 iteman"><span>Top restaurant</span></div>
                                        </div>
                                        <div class="tableBody">
                                            <div class="oneRow">
                                                <div class="iteman col1">
                                                    <div class="description">
                                                        <p class="name"><a target="_blank" href="#">Cette année</a></p>
                                                    </div><!-- Lier les liens à des rapports sur la performance (par exemple : couverts) -->
                                                </div>
                                                <div class="iteman col2"><span><a href="#">80% de couverts</a></span></div>
                                                <div class="iteman col3"><span><a href="#">Trop bon !</a></span></div>
                                                <div class="iteman col4"><span><a href="#">Restaurant 1</a></span></div>
                                            </div>
                                            <div class="oneRow">
                                                <div class="iteman col1">
                                                    <div class="description">
                                                    <p class="name"><a target="_blank" href="#">Année passée</a></p>
                                                    </div>
                                                </div>
                                                <div class="iteman col2"><span><a href="#">60% de couverts</a></span></div>
                                                <div class="iteman col3"><span><a href="#">Il va vraiment fa...</a></span></div>
                                                <div class="iteman col4"><span><a href="#">Restaurant 4</a></span></div>
                                            </div>
                                            <div class="oneRow">
                                                <div class="iteman col1">
                                                    <div class="description">
                                                    <p class="name"><a target="_blank" href="#">06/10/2024</a></p>
                                                    </div>
                                                </div>
                                                <div class="iteman col2"><span><a href="#">70% de couverts</a></span></div>
                                                <div class="iteman col3"><span><a href="#">Je reviendrai dans ce f...</a></span></div>
                                                <div class="iteman col4"><span><a href="#">Restaurant 3</a></span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> 
                            </div> 
                        </div>
                    </div>

                <div class="grid__item__view hide" id="man__reports">
                    <div class="search" id="man__search" data-category="report">
                        <input class="search__views" id= "report__input" type="search" placeholder="Rechercher une date">
                        <button class="submit-button" id="report__button" type="submit">Rechercher</button>
                    </div>
                    <div class="filter__report" id="f__report">
                        <p>Filtrer par <a href="#" class="active fr hide" r-filter="day">jour</a> <a href="#" class="fr" r-filter="week">semaine</a> <a href="#" class="fr" r-filter="month">mois</a> <a href="#" class="fr" r-filter="year">année</a></p>
                    </div>
                    <div class="views__list" r-filter="day">
                        <div class="fr" r-filter="day">
                            <div class="wrapTable">
                                <div class="tableHeader">
                                    <div class="col1 iteman"><span>Jour</span></div>
                                    <div class="col2 iteman"><span>Chiffre d'affaires</span></div>
                                    <div class="col3 iteman"><span>Nombre de restaurants</span></div>
                                    <div class="col4 iteman"><span>Panier moyen</span></div>
                                    <div class="col5 iteman"><span></span></div>
                                </div>
                                <div class="tableBody">
                                    <div class="oneRow">
                                        <div class="iteman col1">
                                            <div class="description">
                                                <p class="name"><a target="_blank" href="#">Aujourd'hui</a></p>
                                            </div><!-- Lier les liens à des rapports sur la performance (par exemple : couverts) -->
                                        </div>
                                        <div class="iteman col2"><span><a href="#">200k€</a></span></div>
                                        <div class="iteman col3"><span><a href="#">3 restaurants</a></span></div>
                                        <div class="iteman col4"><span><a href="#">20€</a></span></div>
                                        <div class="iteman col5"><img class="change__icon" src="./img/icon/upload.png"></div>
                                    </div>
                                    <div class="oneRow">
                                        <div class="iteman col1">
                                            <div class="description">
                                            <p class="name"><a target="_blank" href="#">Hier</a></p>
                                            </div>
                                        </div>
                                        <div class="iteman col2"><span><a href="#">200k €</a></span></div>
                                        <div class="iteman col3"><span><a href="#">3 restaurants</a></span></div>
                                        <div class="iteman col4"><span><a href="#">18 €</a></span></div>
                                        <div class="iteman col5"><img class="change__icon" src="./img/icon/upload.png"></div>
                                    </div>
                                    <div class="oneRow">
                                        <div class="iteman col1">
                                            <div class="description">
                                            <p class="name"><a target="_blank" href="#">06/10/2024</a></p>
                                            </div>
                                        </div>
                                        <div class="iteman col2"><span><a href="#">150k €</a></span></div>
                                        <div class="iteman col3"><span><a href="#">2 restaurants</a></span></div>
                                        <div class="iteman col4"><span><a href="#">25 €</a></span></div>
                                        <div class="iteman col5"><img class="change__icon" src="./img/icon/upload.png"></div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div> 
                    <div class="views__list hide" r-filter="week">
                        <div class="fr" r-filter="week">
                            <div class="wrapTable">
                                <div class="tableHeader">
                                    <div class="col1 iteman"><span>Semaine</span></div>
                                    <div class="col2 iteman"><span>Chiffre d'affaires</span></div>
                                    <div class="col3 iteman"><span>Nombre de restaurants</span></div>
                                    <div class="col4 iteman"><span>Panier moyen</span></div>
                                    <div class="col5 iteman"><span></span></div>
                                </div>
                                <div class="tableBody">
                                    <div class="oneRow">
                                        <div class="iteman col1">
                                            <div class="description">
                                                <p class="name"><a target="_blank" href="#">Cette semaine</a></p>
                                            </div><!-- Lier les liens à des rapports sur la performance (par exemple : couverts) -->
                                        </div>
                                        <div class="iteman col2"><span><a href="#">200k€</a></span></div>
                                        <div class="iteman col3"><span><a href="#">3 restaurants</a></span></div>
                                        <div class="iteman col4"><span><a href="#">20€</a></span></div>
                                        <div class="iteman col5"><img class="change__icon" src="./img/icon/upload.png"></div>
                                    </div>
                                    <div class="oneRow">
                                        <div class="iteman col1">
                                            <div class="description">
                                            <p class="name"><a target="_blank" href="#">Semaine passée</a></p>
                                            </div>
                                        </div>
                                        <div class="iteman col2"><span><a href="#">200k €</a></span></div>
                                        <div class="iteman col3"><span><a href="#">3 restaurants</a></span></div>
                                        <div class="iteman col4"><span><a href="#">18 €</a></span></div>
                                        <div class="iteman col5"><img class="change__icon" src="./img/icon/upload.png"></div>
                                    </div>
                                    <div class="oneRow">
                                        <div class="iteman col1">
                                            <div class="description">
                                            <p class="name"><a target="_blank" href="#">06/10/2024</a></p>
                                            </div>
                                        </div>
                                        <div class="iteman col2"><span><a href="#">150k €</a></span></div>
                                        <div class="iteman col3"><span><a href="#">2 restaurants</a></span></div>
                                        <div class="iteman col4"><span><a href="#">25 €</a></span></div>
                                        <div class="iteman col5"><img class="change__icon" src="./img/icon/upload.png"></div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="views__list hide" r-filter="month">
                        <div class="fr" r-filter="month">
                            <div class="wrapTable">
                                <div class="tableHeader">
                                    <div class="col1 iteman"><span>Mois</span></div>
                                    <div class="col2 iteman"><span>Chiffre d'affaires</span></div>
                                    <div class="col3 iteman"><span>Nombre de restaurants</span></div>
                                    <div class="col4 iteman"><span>Panier moyen</span></div>
                                    <div class="col5 iteman"><span></span></div>
                                </div>
                                <div class="tableBody">
                                    <div class="oneRow">
                                        <div class="iteman col1">
                                            <div class="description">
                                                <p class="name"><a target="_blank" href="#">Ce mois</a></p>
                                            </div><!-- Lier les liens à des rapports sur la performance (par exemple : couverts) -->
                                        </div>
                                        <div class="iteman col2"><span><a href="#">200k€</a></span></div>
                                        <div class="iteman col3"><span><a href="#">3 restaurants</a></span></div>
                                        <div class="iteman col4"><span><a href="#">20€</a></span></div>
                                        <div class="iteman col5"><img class="change__icon" src="./img/icon/upload.png"></div>
                                    </div>
                                    <div class="oneRow">
                                        <div class="iteman col1">
                                            <div class="description">
                                            <p class="name"><a target="_blank" href="#">Mois passé</a></p>
                                            </div>
                                        </div>
                                        <div class="iteman col2"><span><a href="#">200k €</a></span></div>
                                        <div class="iteman col3"><span><a href="#">3 restaurants</a></span></div>
                                        <div class="iteman col4"><span><a href="#">18 €</a></span></div>
                                        <div class="iteman col5"><img class="change__icon" src="./img/icon/upload.png"></div>
                                    </div>
                                    <div class="oneRow">
                                        <div class="iteman col1">
                                            <div class="description">
                                            <p class="name"><a target="_blank" href="#">06/10/2024</a></p>
                                            </div>
                                        </div>
                                        <div class="iteman col2"><span><a href="#">150k €</a></span></div>
                                        <div class="iteman col3"><span><a href="#">2 restaurants</a></span></div>
                                        <div class="iteman col4"><span><a href="#">25 €</a></span></div>
                                        <div class="iteman col5"><img class="change__icon" src="./img/icon/upload.png"></div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                    <div class="views__list hide" r-filter="year">
                        <div class="fr" r-filter="year">
                            <div class="wrapTable">
                                <div class="tableHeader">
                                    <div class="col1 iteman"><span>Année</span></div>
                                    <div class="col2 iteman"><span>Chiffre d'affaires</span></div>
                                    <div class="col3 iteman"><span>Nombre de restaurants</span></div>
                                    <div class="col4 iteman"><span>Panier moyen</span></div>
                                    <div class="col5 iteman"><span></span></div>
                                </div>
                                <div class="tableBody">
                                    <div class="oneRow">
                                        <div class="iteman col1">
                                            <div class="description">
                                                <p class="name"><a target="_blank" href="#">Cette année</a></p>
                                            </div><!-- Lier les liens à des rapports sur la performance (par exemple : couverts) -->
                                        </div>
                                        <div class="iteman col2"><span><a href="#">200k€</a></span></div>
                                        <div class="iteman col3"><span><a href="#">3 restaurants</a></span></div>
                                        <div class="iteman col4"><span><a href="#">20€</a></span></div>
                                        <div class="iteman col5"><img class="change__icon" src="./img/icon/upload.png"></div>
                                    </div>
                                    <div class="oneRow">
                                        <div class="iteman col1">
                                            <div class="description">
                                            <p class="name"><a target="_blank" href="#">Année passée</a></p>
                                            </div>
                                        </div>
                                        <div class="iteman col2"><span><a href="#">200k €</a></span></div>
                                        <div class="iteman col3"><span><a href="#">3 restaurants</a></span></div>
                                        <div class="iteman col4"><span><a href="#">18 €</a></span></div>
                                        <div class="iteman col5"><img class="change__icon" src="./img/icon/upload.png"></div>
                                    </div>
                                    <div class="oneRow">
                                        <div class="iteman col1">
                                            <div class="description">
                                            <p class="name"><a target="_blank" href="#">06/10/2024</a></p>
                                            </div>
                                        </div>
                                        <div class="iteman col2"><span><a href="#">150k €</a></span></div>
                                        <div class="iteman col3"><span><a href="#">2 restaurants</a></span></div>
                                        <div class="iteman col4"><span><a href="#">25 €</a></span></div>
                                        <div class="iteman col5"><img class="change__icon" src="./img/icon/upload.png"></div>
                                    </div>
                                </div>
                            </div> 
                        </div>
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