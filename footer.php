<footer>
    <section class="footer-container">
        <div id="footer-content">
            <div class="footer-box">
                <div class="footer-box-title">
                    <h2>Découvrir</h2>
                </div>
                <div class="footer-box-padtop">
                <?php if ($isLoggedIn && $role === 'admin'): ?>
                    <a href ="create.php" class="links">Ajouter un restaurant</a>
                <?php else: ?>
                    <a href ="inscription-restaurant.php" class="links">Rejoignez le réseau</a>
                <?php endif; ?>
                    <a href ="" class="links">À propos de nous</a>
                </div>
            </div>
            <div class="contact-footer-box">
                <div class="footer-box-title">
                    <h2>Contact</h2>
                </div>
                <div class="footer-box-icons">
                    <a class="links" href=""><span class="material-symbols-outlined">call</span></a>
                    <a class="links" href=""><span class="material-symbols-outlined">mail</span></a>
                    <a class="links" href=""><img src ="img\social network\whatsapp.png" alt=""></a>
                    <a class="links" href=""><img src ="img\social network\facebook.png" alt=""></a>
                    <a class="links" href=""><img src ="img\social network\instagram.png" alt=""></a>
                    </div>
                </div>
            <div class="footer-box">
                <div class="footer-box-title">
                    <h2>Aide</h2>
                </div>
                <div class="footer-box-padtop">
                    <a class="links" href="mentions.php" class="links">Mentions légales</a>
                    <a class="links" href="conditionsgenerales.php" class="links">Conditions générales</a>
                </div>
            </div>
        </div>
    </section>

<!-- ===footer mobile=== -->


    <section class="mobile-footer-container">
        <div class="footer-content-1">
            <div class="footer-box">
                <h2>Découvrir</h2>
                <div class="footer-box-padtop box-1">
                <?php if ($isLoggedIn && $role === 'admin'): ?>
                    <a class="links" href ="create.php" class="links">Ajouter un restaurant</a>
                <?php else: ?>
                    <a class="links"href ="inscription-restaurant.php" class="links">Rejoignez le réseau</a>
                <?php endif; ?>
                    <a class="links" href="">À propos</a>
                </div>
            </div>
            <div class="footer-box">
                <h2>Aide</h2>
                <div class="footer-box-padtop box-1">
                    <a class="links" href="">Mentions légales</a>
                    <a class="links" href="">Conditions générales</a>
                </div>
            </div>
        </div>
        <div class="footer-content-2">
            <!-- <h2>Contact</h2> -->
                <div class="footer-box-padtop">
                    <a href=""><span class="material-symbols-outlined">call</span></a>
                    <a href=""><span class="material-symbols-outlined">mail</span></a>
                    <a href=""><img src ="img\social network\whatsapp.png" alt=""></a>
                    <a href=""><img src ="img\social network\facebook.png" alt=""></a>
                    <a href=""><img src ="img\social network\instagram.png" alt=""></a>
                </div>
            <!-- </div> -->
        </div>
    </section>
</footer>

<!-- Crédits images
<a href="https://www.freepik.com/free-photo/pasta-spaghetti-with-shrimps-sauce_6943813.htm#page=4&query=4k%20food&position=0&from_view=keyword&track=ais_hybrid&uuid=dc0d0f2f-093f-4967-b94d-4125b68c1619">Image by valeria_aksakova on Freepik</a>
<a href="https://www.freepik.com/free-photo/flat-lay-table-full-delicious-food-composition_19672852.htm#query=4k%20food&position=11&from_view=keyword&track=ais_hybrid&uuid=8eb3cfb0-be15-4b3a-8a61-79686066c885">Image by freepik</a>
<a href="https://www.freepik.com/free-ai-image/delicious-lobster-gourmet-seafood_261849938.htm#query=delicious%20food&position=0&from_view=keyword&track=ais_hybrid&uuid=fe4a41ae-add2-4c36-9930-265ba6fdfc92">Image by freepik</a> -->