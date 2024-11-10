    <!-- === map call with leaflet  === -->

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
</head>

    <!-- === website header  === -->

<?php include 'layout.php'; ?>
<?php include 'header.php'; ?>


    <!-- ===main=== -->

<body>
    <div id="global__order">

        <!-- === map part === -->

        <div class="global__map">
            <div id="map">
                <script>

                        /* map and zoom initialization on the delivery man (add dynamic delivery localization) */

                    var map = L.map('map').setView([48.7460409, -3.4588383], 14.5);

                        /* OpenStreetMap attribution (and level of zoom) */

                    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                        maxZoom: 16,
                        attribution: '© OpenStreetMap'
                    }).addTo(map);

                        /* icons options */

                    var Iconic = L.Icon.extend({
                        options: {
                            shadowUrl: 'none.png',
                            iconSize:     [38, 38],
                            shadowSize:   [0, 0],
                            iconAnchor:   [0, 0],
                            shadowAnchor: [0, 0],
                            popupAnchor:  [0, 0]
                        }
                    });

                        /* icons (add dynamic delivery icon) */

                    var homeIcon = new Iconic({iconUrl: './img/icon/home.png'}),
                        cookIcon = new Iconic({iconUrl: './img/icon/order.png'}),
                        deliveryIcon = new Iconic({iconUrl: './img/icon/velo.png'});

                        /* icons localization (add dynamic restaurant name, dynamic customer localization, dynamic restaurant localization and dynamic delivery localization _ from info-livraison) */

                    L.marker([48.7320409, -3.4588383], {icon: homeIcon},{alt:'Mon emplacement'}).addTo(map).bindPopup("Mon emplacement");
                    L.marker([48.7520409, -3.4588383], {icon: cookIcon},{alt:'Emplacement du restaurant'}).addTo(map).bindPopup("Aux plaisirs gustatifs");
                    L.marker([48.7460409, -3.4588383], {icon: deliveryIcon},{alt:'Emplacement du livreur'}).addTo(map).bindPopup("Je livre à la vitesse de l'éclair !");

    /* code pour infolivraison
    
        /* Call to leaflet (before the header and layout php) - MODIFICATIONS A FAIRE à la fin de la balise "script" de "head"

        <head>
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />    
            <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
            <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin="">!!!! Ouvrir la balise de fermeture, à la place de ce commentaire !!!!!/script>
        </head> 

        (Dans une balise 'script' (imbriquée dans une div ?))

        /* I have found you !

    function onLocationFound(e) {
        var deliveryll = e.latlng;
    };

        /* Localization error 

    function onLocationError(e) {
        alert(e.message);
    };   */ 
                </script>
            </div>
        </div>

        <div id="side">
            <div id="data__order">
                <div id="logo__side">
                    <img class="picture__side" src="./img/logo/logo chef hat.png">
                </div>
                <div id="your__order">
                    <div class="hours" id="hours__top">
                        <p class="hour">12h12</p>
                        <p>Arrivée estimée</p>
                    </div>
                    <div class="hours" id="hours__code">
                        <p>Votre code</p>    
                        <p class="hour2">56fr87</p>
                    </div>
                </div>
                    <div class="size" id="order__cook">
                        <p>Cuisiné par "Aux plaisirs gustatifs"
                        </p>
                        <i>1,5 kg dans trois sacs
                        </i>
                    </div>
                    <div class="size" id="order__cook2">
                        <p>"Aux plaisirs gustatifs"
                        </p>
                        <i>1,5 kg dans trois sacs
                        </i>
                    </div>
                    <div class="hours2">
                        <p>Votre code</p>    
                        <p class="hour2">56fr87</p>
                    </div>
            </div>
            <div id="comments__order">
                <h4>Vos commentaires</h4>
                <p>Pas de couverts. Livrer à la porte bleue, svp.
                </p>
            </div>
            <div id="details__order">
                <!--<div>
                    <br>
                    <button class="clients__buttons__yellow"><img class="clients__icon__intern" src="./img/icon/add.png"></button>
                    <br><br>
                    <h4 class="title__order">Détails de la livraison</h4>
                    <br>
                </div>-->
                <div id="ordering">
                    <div id="img__order">
                        <img width="30" class="people__order" src="./img/Speedy.jpeg">
                        <img width="30" class="locomotion__order" src="./img/icon/Velo.png">
                    </div>
                    <div id="text__order">
                        <p>Speedy Gonzales s'occupe de votre livraison.
                        </p>
                    </div>
                </div>
                <div class="horder" id="hide__order">
                    <div class="pictures__order">
                        Photo + image Véhicule
                    </div>    
                    <p>Speedy Gonzales s'occupe de votre livraison.
                    </p>
                </div>
            </div>
        </div>
    </div>

</body>

    <!-- ===fin main=== -->


    <!-- ===footer=== -->

    <?php include 'footer.php'; ?>

    <!-- ===fin footer=== -->

    <!-- Crédit icone : <a href="https://www.flaticon.com/free-icons/velo" title="velo icons">Velo icons created by egorpolyakov - Flaticon</a>
    <a href="https://www.flaticon.com/fr/icones-gratuites/linternet" title="l'internet icônes">L'internet icônes créées par Freepik - Flaticon</a>-->

</html>