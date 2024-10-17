<?php include 'layout.php'; ?>
<?php include 'header.php'; ?>

<head>
    <link rel="stylesheet" href="styles\create.css" type="text/css">
</head>

<body>

    <!-- ===main=== -->

    <div id="create-super-container">
        <section class ="create-container">
            <div class="resto-id"  id="add__top">
                <div class="add__picture">
                    <h4>Télécharger une image du restaurant :</h4>
                    <br>
                    <br>
                    <input type="file" name="file">
                </div>
                <div class="resto-id-text _dp_column">
                    <div class="resto-id-title">
                        <h4>Informations du restaurant :</h4>
                        <br>
                        <input id="add__shop" type="add" placeholder=" Nom du restaurant">
                    </div>
                    <div class="resto-id-specs">
                        <div>
                            <input id="add__hours" type="add" placeholder=" Horaires d'ouverture">
                        </div>
                        <div>
                            <input id="add__order" type="add" placeholder=" Délai préparation commande">
                        </div>
                    </div>
                </div>
            </div>
            <div class="resto-id" id="add__item">
                <div class="add__picture">
                    <h4>Télécharger une image de l'item :</h4>
                    <br>
                    <br>
                    <input type="file" name="file">
                    <br>
                    <br>
                    <br>              
                    <div>
                        <input id="add__price" type="add" placeholder=" Prix">
                    </div>
                    <div>
                        <textarea id="add__things__item" name="txtmulti" cols="25" rows="3" wrap="virtual" placeholder=" Description de l'item"></textarea>
                    </div>
                </div>
                <div class="resto-id-text _dp_column">
                    <div class="resto-id-title">
                        <h4>Ajout d'items :</h4>
                        <br>
                        <div>
                            <label for="item-select">Type :</label>
                                <select name="items" id="item-select">
                                    <option value="">--Veuillez choisir une option--</option>
                                    <option value="plat">Plat</option>
                                    <option value="menu">Menu</option>
                                    <option value="dessert">Dessert</option>
                                    <option value="boisson">Boisson</option>
                                </select>
                        </div>
                    </div>
                    <div class="resto-id-specs">
                        <div>
                            <input id="add__shop" type="add" placeholder=" Intitulé">
                        </div>
                        <div>
                            <input id="add__kg" type="add" placeholder=" Poids">
                        </div>
                        <div>
                            <input id="add__make" type="add" placeholder=" Délai de préparation">
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class ="create-container" id="create-container-presentation">
            <div class="resto-resume body-padding" id="add__description">
                <div class="_w_50 mobile-resto-presentation">
                    <h4>Présentation du restaurant :</h4>
                    <br>
                    <textarea id="add__things" name="txtmulti" cols="25" rows="3" wrap="virtual" placeholder=" Description du restaurant"></textarea>
                </div>
            </div>
            <div class="create__shop">
                <button class="submit-button" id="create__button" type="submit">Enregistrer</button>
            </div>
        </section>
    </div>
  

    <!-- ===fin main=== -->


    <!-- ===footer=== -->

    <?php include 'footer.php'; ?>

    <!-- ===fin footer=== -->
     
</body>