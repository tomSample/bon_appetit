<?php include 'layout.php'; ?>
<?php include 'header.php'; ?>


<body>

    <!-- ===main=== -->
      
    <section id="management" class="fields">
        <div class="container__title" id="management__title">
            <div class="section-header">
                <h1 class="invisible">Administration</h1>
            </div>
        </div>

        <div class="container" id="views">
            <div class="grid" id="man__grid">
                <div class="grid__item__nav">
                    <ul class="grid_nav">
                        <li class="grid__admin__nav">
                            <a href="#">Restaurants</a>
                        </li>
                        <li class="grid__admin__nav">
                            <a href="#">Clients</a>
                        </li>
                        <li class="grid__admin__nav">
                            <a href="#">Tableau de bord</a>
                        </li>
                        <li class="grid__admin__nav">
                            <a href="#">Rapports</a>
                        </li>
                    </ul>
                </div>

                <div class="grid__item__view" id="man__customers">

                    <div class="search" id="man__search">
                        <input class="search__views" id = "man__input" type="search" placeholder="Recherchez un client">
                        <button class="submit-button" id="man__button" type="submit">Rechercher</button>
                    </div>
                    <div class="views__list">
                        <ui>
                            <li><a href="clients.html"></a>John Doe</li><!-- Lier le lien à la personne affichée -->

                            <li><a href="clients.html"></a>Jane Tiger</li>

                            <li><a href="clients.html"></a>Jean Paul</li>
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