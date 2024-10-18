<?php include 'layout.php'; ?>
<?php include 'header.php'; ?>

<head>
    <link rel="stylesheet" href="styles\clients.css" type="text/css">
    <script src="js/clients.js" defer></script>
</head>

    <!-- ===main=== -->
<body>
    <section id="profile" class="fields">
        <div class="container" id="page__title">
            <div class="section-header">
                <h1 class="invisible">Profil</h1>
            </div>
        </div>
        <div class="container" id="identity">
            <div class="subtitle">
                <h2>Identité</h2><button class="clients__buttons__yellow"><img class="identity__icon" src="./img/icon/editing.png"></button>
            </div>
            <div class="grid">
                <div class="together">
                    <div class="clients__alone">
                        <div class="grid__item__left">
                            <p>Nom, Prénom</p>
                        </div>
                        <div>
                            <p>John Doe</p>
                        </div>
                    </div>
                    <div class="clients__alone">
                        <div class="grid__item__left">
                            <p>Adresse de livraison</p>
                        </div>
                        <div>
                            <p>56 rue de Brest</p>
                        </div>
                    </div>
                    <div class="clients__alone">
                        <div class="grid__item__left">
                            <p>Code postal</p>
                        </div>
                        <div>
                            <p>22300</p>
                        </div>
                    </div>
                    <div class="clients__alone">
                        <div class="grid__item__left">
                            <p>Ville</p>
                        </div>
                        <div>
                            <p>Lannion</p>
                        </div>
                    </div>
                    <div class="clients__alone">
                        <div class="grid__item__left">
                            <p>E-mail</p>
                        </div>
                        <div>
                            <p>monadresse@email.fr</p>
                        </div>
                    </div>
                    <div class="clients__alone">
                        <div class="grid__item__left">
                            <p>Téléphone</p>
                        </div>
                        <div>
                            <p>06 78 98 65 15</p>
                        </div>
                    </div>
                </div>
                <div class="together">
                    <div class="clients__alone">
                        <div class="grid__item__left">
                            <p>Adresse de facturation</p>
                        </div>
                        <div class="clients__alone">
                            <p>32 rue de Paris</p><button class="clients__buttons__yellow"><img class="clients__icon__intern" src="./img/icon/add.png"></button>
                        </div>
                    </div>
                    <div class="clients__alone">
                        <div class="grid__item__left">
                            <p>Code postal</p>
                        </div>
                        <div>
                            <p>22300</p>
                        </div>
                    </div>
                    <div class="clients__alone">
                        <div class="grid__item__left">
                            <p>Ville</p>
                        </div>
                        <div>
                            <p>Lannion</p>
                        </div> 
                    </div>
                </div>
                <div class="together">
                    <div class="clients__alone">
                        <div class="grid__item__left">
                            <p>Mode de paiement</p>
                        </div>
                        <div class="clients__alone">
                            <p>Carte bleue</p><button class="clients__buttons__yellow"><img class="clients__icon__intern" src="./img/icon/arrow.png"></button>
                        </div>
                    </div>
                    <div class="clients__alone">
                        <div class="grid__item__left">
                            <p>Derniers numéros<br></p>
                        </div> 
                        <div>
                            <p>2659</p>
                        </div>
                    </div>
                        <!--<div class=clients__pay>
                        </div>--> 
                </div>
            </div>
        </div>
        
        <div class="container" id="history">
            <div class="subtitle">
                <h2>Historique</h2>
            </div>
            <div class="table">
                <table>
                    <tr><th class="first">Date</th><th class="first">Restaurant</th><th class="first">Prix</th>
                    </tr>
                    <tr><th class="follow">12/06/2024</th><th class="follow">Aux plaisirs gustatifs</th><th class="follow">19 €</th><th><button class="clients__buttons__black"><img class="clients__icon" src="./img/icon/upload.png"></button></th>
                    </tr>
                    <tr><th class="follow">13/08/2024</th><th class="follow">Aux plaisirs gustatifs</th><th class="follow">23 €</th><th><button class="clients__buttons__black"><img class="clients__icon" src="./img/icon/upload.png"></button></th>
                    </tr>
                    <tr><th class="follow">15/09/2024</th><th class="follow">La corne d'abondance</th><th class="follow">32 €</th><th><button class="clients__buttons__black"><img class="clients__icon" src="./img/icon/upload.png"></button></th>
                    </tr>
                </table>
            </div>
            <div class="add">
                <p>En voir plus</p><button class="clients__buttons__black"><img class="clients__icon" src="./img/icon/add.png"></button>
            </div>
        </div>

        <div class="container" id="love">
            <div class="subtitle">
                <h2>Restaurant préféré</h2><button class="clients__buttons__yellow"><img class="identity__icon2" src="./img/icon/editing.png"></button>
            </div>
            <div id="loved">
                <p>Aux plaisirs gustatifs                    
                </p>
            </div>
        </div>

        <div class="container" id="setup">
            <div class="subtitle">
                <h2>Gestion des notifications</h2>
            </div>
            <div id="chosen">
                <p>Vous pouvez désactiver les notifications à tout moment. Nous nous engageons à ne jamais vendre vos informations à des tiers.
                </p><br>
                <input type="checkbox" id="states" names="states" checked>
                <label for= "states">Notifications des commandes en cours</label><br>
                <p>Soyez informé(e) lorsque votre livreur ou livreuse est en route et laissez-lui la possibilité de vous contacter si nécessaire.
                </p><br>

                <input type="checkbox" id="email" names="email" checked>
                <label for= "email">Réception par e-mail</label><br>
                <input type="checkbox" id="push" names="push" checked>
                <label for= "push">Réception push</label><br>
                <input type="checkbox" id="publicity" names="publicity" checked>
                <label for= "publicity">Notifications promotionnelles</label><br>
                <p>Recevez les offres spéciales et les promotions.
                </p><br>
            </div> 
            <div id="chosen2">
                <br>
                <div class="bsure">
                    <button class="Me">Supprimer le compte</button>
                    <p>Vous voulez nous quitter ? Nous serons tristes mais c'est votre choix.
                    </p>
                </div>
                <div class="csure hide">
                    <p class=psure>En êtes-vous certain(e) ? Votre compte ne sera pas récupérable ensuite.
                    </p>
                    <button>Oui, supprimer le compte.</button>
                    <img id="delete__picture" src="img/delete.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

</body>

    <!-- ===fin main=== -->


    <!-- ===footer=== -->

    <?php include 'footer.php'; ?>


    <!-- ===fin footer=== -->


    <!-- ===licences=== 
    <a href="https://www.flaticon.com/free-icons/download" title="download icons">Download icons created by joalfa - Flaticon</a>
    <a href="https://www.flaticon.com/free-icons/modify" title="modify icons">Modify icons created by Freepik - Flaticon</a>
    <a href="https://www.flaticon.com/free-icons/plus" title="plus icons">Plus icons created by dmitri13 - Flaticon</a> 
    <a href="https://www.flaticon.com/free-icons/user-interface" title="user interface icons">User interface icons created by QudaDesign - Flaticon</a>
    <a href="https://www.canva.com/fr_fr/magique/" title="delete picture">Autre image générée par média magique de Canva</a> -->

</html>