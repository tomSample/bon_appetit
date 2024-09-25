<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Profil</title>
    <meta name="clients" content="Profil">
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles\styles.css" type="text/css">
</head>

<body>

    <!-- ===header=== -->

    <header class="header">

    </header>

    <!-- ===fin header=== -->


    <!-- ===main=== -->
      
    <section id="profile" class="fields">
        <div class="container" id="page__title">
            <div class="section-header">
                <h1 class="invisible">Profil</h1>
            </div>
        </div>
        <div class="container" id="identity">
            <div class="subtitle">
                <h2>Identité</h2><img class="icon" src="./img/icon/editing.png">

                    <!--Réutiliser inscription pour les modifications-->
            </div>
            <div class="grid">
                <div class="grid__item__left">
                    <p>Nom, Prénom<br>
                    Adresse de livraison<br>
                    Code postal<br>
                    Ville<br>
                    E-mail<br>
                    Téléphone<br>
                    <br>
                    Adresse de facturation<br>
                    Code postal<br>
                    Ville<br>
                    <br>
                    Mode de paiement<br>
                    Derniers numéros<br>
                    </p>
                </div>

                <div class="grid__item__right">
                    <p>John Doe<br>
                    56 rue de Brest<br>
                    22300<br>
                    Lannion<br>
                    monadresse@email.fr<br>
                    06 78 98 65 15<br>
                    <br>
                    32 rue de Paris<img class="icon__intern" src="./img/icon/add.png"><br>
                    22300<br>
                    Lannion<br>
                    <br>
                    Carte bleue<img class="icon__intern" src="./img/icon/arrow.png"><br>
                    2659<br>
                    </p>
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
                    <tr><th class="follow">12/06/2024</th><th class="follow">Aux plaisirs gustatifs</th><th class="follow">19 €</th><th><img class="icon" src="./img/icon/upload.png"></th>
                    </tr>
                    <tr><th class="follow">13/08/2024</th><th class="follow">Aux plaisirs gustatifs</th><th class="follow">23 €</th><th><img class="icon" src="./img/icon/upload.png"></th>
                    </tr>
                    <tr><th class="follow">15/09/2024</th><th class="follow">La corne d'abondance</th><th class="follow">32 €</th><th><img class="icon" src="./img/icon/upload.png"></th>
                    </tr>
                </table>
            </div>
            <div class="add">
                <p>En voir plus</p><img class="icon" src="./img/icon/add.png">
            </div>
        </div>

        <div class="container" id="love">
            <div class="subtitle">
                <h2>Restaurant préféré</h2><img class="icon" src="./img/icon/editing.png">
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
                
                <br>    
                <h4>Supprimer le compte</h4>
                <p class="delete">Vous voulez nous quitter ? Nous serons tristes mais c'est votre choix.
                </p>
            </div>
        </div>
    </section>

    <!-- ===fin main=== -->


    <!-- ===footer=== -->

    <footer class="footer">

    </footer>

    <!-- ===fin footer=== -->
</body>


    <!-- ===licences=== 
    <a href="https://www.flaticon.com/free-icons/download" title="download icons">Download icons created by joalfa - Flaticon</a>
    <a href="https://www.flaticon.com/free-icons/modify" title="modify icons">Modify icons created by Freepik - Flaticon</a>
    <a href="https://www.flaticon.com/free-icons/plus" title="plus icons">Plus icons created by dmitri13 - Flaticon</a> 
    <a href="https://www.flaticon.com/free-icons/user-interface" title="user interface icons">User interface icons created by QudaDesign - Flaticon</a> -->

</html>