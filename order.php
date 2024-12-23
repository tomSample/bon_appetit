

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
                    alert("Geolocation n'est pas supporté par ce navigateur.");
                }
        </script>
    </div>
</body>

    <!-- ===fin main=== -->


    <!-- ===footer=== -->

    <?php include 'footer.php'; ?>


    <!-- ===fin footer=== -->

</html>