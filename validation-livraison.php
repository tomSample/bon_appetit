<!-- code pour géolocalisation après acceptation livraison  _ DELETE THIS LINE WHEN WORK ON IT -->
    
     <!-- Call to leaflet (before the header and layout php) -->

<!--    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />    
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    </head> -->

 <!--   (Dans une balise 'script' (imbriquée dans une div ?) _ DELETE THIS LINE WHEN WORK ON IT)

    /* I have found you !

function onLocationFound(e) {
    var deliveryll = e.latlng;
};

    /* Localization error 

function onLocationError(e) {
    alert(e.message);
};   -->

<?php include 'layout.php'; ?>
<?php include 'header.php'; ?>

<!-- ===hero banner=== -->

<section class="validlivraison-hero-banner">
    <section class="validlivraison-container1">
        <section class="validlivraison-section1">
            Vous avez une livraison     
        </section> 
    </section>     
    <section class="validlivraison-container2">
        <section class="validlivraison-section2">
            <div class="validlivraison-titresection1">
                Informations du restaurant
            </div>
        <br>
           Nom : Restaurant 1 
        <br>
           Addresse : Addresse 1 
        <br>
            Horaires : Ouvre à 11h - Ferme à 23h
        <br>
            Destination restaurant : À 750m
        </section> 
        <section class="validlivraison-section3">
            <div class="validlivraison-titresection1">
                Informations de la livraison
            </div>
        <br>
           Poids : 15kg
        <br>
           Paquets : 2 paquets
        <br>
            Estimation temps souhaité : 25min
        <br>
            Destination point livraison : À 150m
        </section> 
    </section> 
    <section class="validlivraison-container3">
        <section class="validlivraison-section4">
            <div class="validlivraison-containerbutton1">
                            <div class="validlivraison-button1">
                                <a href="information_livraison.php">Accepter la livraison</a>
                            </div>
            </div>
        </section> 
        <section class="validlivraison-section5">
            <div class="validlivraison-containerbutton2">
                            <div class="validlivraison-button2">
                                <a href="#">Livraison suivante</a>
                            </div>
            </div>
        </section> 
        </section> 
        <section class="validlivraison-section6">
            <div class="validlivraison-containerbuttonmobile1">
                            <div class="validlivraison-buttonmobile1">
                                <a href="#">Livraison suivante</a>
                            </div>
            </div>
        </section> 
</section>

<!-- ===fin hero-banner=== -->


<!-- ===footer=== -->
<?php include 'footer.php'; ?>
<!-- ===fin footer=== -->

    </body>
</html>