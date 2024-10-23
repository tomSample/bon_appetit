

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>
     <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
     integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
     crossorigin=""></script>
     <link rel="stylesheet" href="styles\styles.css" type="text/css">
</head>


    <!-- ===main=== -->

<body>
    <div id="global__order">

        <!-- ===map follow === -->

        <div class="global__map">
            <div id="map">
                <script>

                /* map configuration */
                var map = L.map('map').fitWorld();

                L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 16,
                    attribution: '© OpenStreetMap'
                }).addTo(map);

                map.locate({setView: true, maxZoom: 16}); 

                /* test _ à conserver pour l'instant, svp
                var route = [
                            [48.7321, -3.4614],
                            [48.7332, -3.4600],
                            [48.7343, -3.4589]
                        ];

                        L.polyline(route, {color: 'red'}).addTo(map);

                function onLocationFound(e) {
                    var radius = e.accuracy;

                    L.marker(e.latlng).addTo(map)
                        .bindPopup("Vous êtes à " + radius + " mètres de ce point.").openPopup();

                    L.circle(e.latlng, radius).addTo(map);
                }

                map.on('locationfound', onLocationFound);

                function onLocationError(e) {
                    alert(e.message);
                }

                map.on('locationerror', onLocationError);*/

                /* Localisation and follow movements */

                var currentLocation = L.marker([48.7321, -3.4614]).addTo(map);
                        
                    function updateLocation(position) {
                        var lat = position.coords.latitude;
                        var lon = position.coords.longitude;
                        currentLocation.setLatLng([lat, lon]);
                        map.setView([lat, lon], 16);
                    }
                    
                    if (navigator.geolocation) {
                        navigator.geolocation.watchPosition(updateLocation);
                    } else {
                        alert("La géolocalisation n'est pas supportée par ce navigateur.");
                    }
                </script>
            </div>
        </div>

        <div id="side">
            <div id="data__order">
                <div id="logo__side">
                    <img class="picture__side" src="./img/logo/logo chef hat.png">
                </div>
                <div id="your__order">
                    <div class="hours">
                        <p class="hour">12h12</p>
                        <p>Arrivée estimée</p>
                    </div>
                    <div class="hours">
                        <p>Votre code</p>    
                        <p class="hour2">56fr87</p>
                    </div>
                </div>
                    <div class="size">
                        <p>Cuisiné par "Aux plaisirs gustatifs"
                        </p>
                        <i>1,5 kg dans trois sacs
                        </i>
                    </div>
            </div>
            <div id="comments__order">
                <h4>Vos commentaires pour la livraison</h4>
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
                        <img width="30" class="locomotion__order" src="./img/Velo.png">
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

    <!-- Crédit icone : <a href="https://www.flaticon.com/free-icons/velo" title="velo icons">Velo icons created by egorpolyakov - Flaticon</a>-->

</html>