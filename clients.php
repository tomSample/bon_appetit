<?php include 'layout.php'; ?>
<?php include 'header.php'; ?>

<head>
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
                <h2>Identité</h2><button class="clients__buttons__yellow witcher"><img class="identity__icon" src="./img/icon/editing.png"></button>
            </div>
            <div class="grid">
                <div class="together">
                    <div class="clients__alone">
                        <div class="grid__item__left">
                            <p>Nom, Prénom</p>
                        </div>
                        <div class="changed" id="name">
                            <p>John Doe</p>
                        </div>
                        <div class="change hiden" id="name2">
                            <input id="change__name" type="change__type" class="change__type" placeholder=" John Doe">
                        </div>
                    </div>
                    <div class="clients__alone">
                        <div class="grid__item__left">
                            <p>Livraison</p>
                        </div>
                        <div class="changed" id="adress">
                            <p>56 rue de Brest</p>
                        </div>
                        <div class="change hiden" id="adress2">
                            <input id="change__adress" type="change__type" class="change__type" placeholder=" 56 rue de Brest">
                        </div>
                    </div>
                    <div class="clients__alone">
                        <div class="grid__item__left">
                            <p>Code postal</p>
                        </div>
                        <div class="changed" id="postal__code">
                            <p>22300</p>
                        </div>
                        <div class="change hiden" id="postal__code2">
                            <input id="change__city" type="change__type" class="change__type" placeholder=" 22300">
                        </div>
                    </div>
                    <div class="clients__alone">
                        <div class="grid__item__left">
                            <p>Ville</p>
                        </div>
                        <div class="changed" id="city">
                            <p>Lannion</p>
                        </div>
                        <div class="change hiden" id="city2">
                            <input id="change__city" type="change__type" class="change__type" placeholder=" Lannion">
                        </div>
                    </div>
                    <div class="clients__alone">
                        <div class="grid__item__left">
                            <p>E-mail</p>
                        </div>
                        <div class="changed" id="email">
                            <p>monadresse@email.fr</p>
                        </div>
                        <div class="change hiden" id="email2">
                            <input id="change__email" type="change__type" class="change__type" placeholder=" monadresse@email.fr">
                        </div>
                    </div>
                    <div class="clients__alone">
                        <div class="grid__item__left">
                            <p>Téléphone</p>
                        </div>
                        <div class="changed">
                            <p>06 78 98 65 15</p>
                        </div>
                        <div class="change hiden" id="phone2">
                            <input id="change__phone" type="change__type" class="change__type" placeholder=" 06 78 98 65 15">
                        </div>
                    </div>
                    <div class="change hiden">
                        <button class="submit-button" id="identity__button" type="submit">Enregistrer</button>
                    </div>
                </div>
                <div class="together">
                    <div class="clients__alone">
                        <div class="grid__item__left">
                            <p>Facturation</p>
                        </div>
                        <div class="clients__alone" id="hiden__me">
                            <label for="invoice__select"></label>
                                <select name="invoice" id="invoice__select">  
                                    <option value="invoice1" class="option">32 rue de Paris, Lannion</option>
                                    <option value="invoice2" class="option">22 rue de Paris, Morlaix</option>
                                    <option value="invoice3" class="option">12 rue de Paris, Plougannou</option>
                                </select><button class="clients__buttons__yellow addproof"><img class="clients__icon__intern" src="./img/icon/add.png"></button><button class="clients__buttons__yellow proof"><img class="clients__icon__intern" src="./img/icon/delete.png"></button>
                        </div>
                        <div class="hiden" id="newinvoice">
                            <div class="resto-id-specs" id="invoice__newp">
                                    <div class="close__invoice">
                                        <input id="invoice__name" type="add__invoice" class="add__invoice" placeholder=" Adresse"><button class="clients__buttons__yellow proof__off"><img class="clients__icon__intern" src="./img/icon/close.png"></button>
                                    </div>
                                    <input id="invoice__number" type="add__invoice" class="add__invoice" placeholder=" Code postal">
                                    <input id="invoice__number" type="add__invoice" class="add__invoice" placeholder=" Ville">
                                    <button class="submit-button" id="invoice__button" type="submit">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                    <div class="clients__alone">
                        <div class="grid__item__left">
                            <p>Paiement</p>
                        </div>
                        <div class="clients__alone" id="find__me">
                            <label for="pay__select"></label>
                                <select name="pay" id="pay__select">  
                                    <option value="pay1" class="option">Carte bleue #2659</option>
                                    <option value="pay2" class="option">Carte bleue #3274</option>
                                    <option value="pay3" class="option">Carte restaurant</option>
                                </select><button class="clients__buttons__yellow turn"><img class="clients__icon__intern" src="./img/icon/add.png"></button><button class="clients__buttons__yellow turn"><img class="clients__icon__intern" src="./img/icon/delete.png"></button>
                        </div>
                        <div class="hiden" id="plus">
                            <div class="resto-id-specs" id="clients__newp">
                                <div class="selector">
                                    <label for="type__select"></label>
                                        <select name="type" id="type__select">  
                                            <option value="type1" class="option">Carte bleue</option>
                                            <option value="type2" class="option">Carte restaurant</option>
                                            <option value="type2" class="option">Autre carte</option>
                                        </select><button class="clients__buttons__yellow turn__off"><img class="clients__icon__intern" src="./img/icon/close.png"></button>
                                </div>
                                    <input id="add__name" type="add__type" class="add__type" placeholder=" Titulaire">
                                    <input id="add__number" type="add__type" class="add__type" placeholder=" Numéro">
                                    <input id="add__number" type="add__type" class="add__type" placeholder=" Expire le mm/aa">
                                    <button class="submit-button" id="pay__button" type="submit">Enregistrer</button>
                            </div>
                        </div>
                    </div>
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
                <h2>Restaurant favori</h2><button class="clients__buttons__yellow whois"><img class="identity__icon2" src="./img/icon/editing.png"></button>
            </div>
            <div id="loved">
                <p>Aux plaisirs gustatifs                    
                </p>
            </div>
            <div class="clients__favorite hiden">
                <label for="favorite__select"></label>
                    <select name="favorite" id="favorite__select">  
                        <option value="" class="option">Choisir son favori</option>
                        <option value="name1" class="option">Aux plaisirs gustatifs</option>
                        <option value="name2" class="option">Mangez-moi</option>
                        <option value="name2" class="option">Le 7e sens</option>
                    </select>
                <button class="submit-button" id="favorite__button" type="submit">Enregistrer</button>
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
                    <button class="Me" id="bye0">Supprimer le compte</button>
                    <p>Vous voulez nous quitter ? Nous serons tristes mais c'est votre choix.
                    </p>
                </div>
                <div class="csure hiden">
                    <p class=psure>En êtes-vous certain(e) ? Votre compte ne sera pas récupérable ensuite.
                    </p>
                    <button id="bye">Oui, supprimer le compte.</button>
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
    <a href="https://www.flaticon.com/free-icons/subtract" title="subtract icons">Subtract icons created by Xinh Studio - Flaticon</a> 
    <a href="https://www.flaticon.com/free-icons/user-interface" title="user interface icons">User interface icons created by QudaDesign - Flaticon</a>
    <a href="https://www.canva.com/fr_fr/magique/" title="delete picture">Autre image générée par média magique de Canva</a> -->

</html>