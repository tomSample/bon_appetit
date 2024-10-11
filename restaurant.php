<?php include 'layout.php'; ?>
<?php include 'header.php'; ?>

<section class ="body-padding">
    <div class="resto-id">
        <div>
            <img id="resto-id-photo" src="img\resto_template_2.jpg" alt="PHOTO">
        </div>
        <div class="resto-id-text _dp_column">
            <div class="resto-id-title">
                <h2>NOM DU RESTO</h2>
            </div>
            <div class="resto-id-specs">
                <div>
                    <p>Horaires d'ouvertures</p>
                </div>
                <div>
                    <p>Délai de livraison</p>
                </div>
                <div>
                    <p>Avis</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section>
    FILTERS
</section> -->

<section>
    <div class="resto-resume body-padding">
        <div class="_w_50 mobile-resto-presentation">

            <h3>Présentation du restaurant</h3>
            <p class="_line_height _padding_block_1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laborum saepe similique cupiditate facere consequuntur unde accusantium facilis, sint doloremque. Reiciendis earum nobis commodi aut magnam placeat autem harum. Numquam, laudantium!</p>
        </div>
        <div class="book-container">
            <div id="book-content">
                <div>
                    <h3>Réserver une table</h3>
                </div>
                <div id="book-info">
                    <div>
                        <input id="book-date" type="date" id="date" name="date" value="2021-07-22">
                        <label for="hours">Heure :</label>
                        <select id="hours" name="hours">
                            <?php for ($i = 12; $i < 23; $i++): ?>
                                <option value="<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></option>
                            <?php endfor; ?>
                        </select>
                        <select id="minutes" name="minutes">
                            <?php for ($i = 0; $i < 60; $i += 15): ?>
                                <option value="<?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?>"><?php echo str_pad($i, 2, '0', STR_PAD_LEFT); ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                    <div>
                        <label for="guests">Nombre de couverts :</label>
                        <select id="guests" name="guests">
                            <option value="1">1</option>
                            <option value="2" selected>2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="6">11</option>
                            <option value="7">12</option>
                        </select>
                    </div>
                    <button class="_borderradius10">Réserver</button>
                </div>
            </div>
</section>

<section class="_dp_flex">
    <div id="resto-nav">
        <div id="resto-anchors" class="_dp_column">
            <a href=#plats>Plats</a>
            <a href=#menus>Menus</a>
            <a href=#desserts>Desserts</a>
            <a href=#boissons>Boissons</a>
        </div>
    </div>
    <div class="list-container _w_100">
        <div class="list">
            <h3 id="plats" class="resto-subtitle">Plats</h3>
            <article onclick="ArticleManager.togglePopup()" id="plats-article-1" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Lasagne au boeuf maison, 200g</p>
                            <p>11,90€</p>
                        </div>
                        <div class="item-button">
                            <button onclick="quickAddToCart(event)"><strong>+</strong></button>
                        </div>
                    </div>
                </div>
            </article>
            <article onclick="ArticleManager.togglePopup()" id="plats-article-2" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Lasagne au boeuf maison, 200g</p>
                            <p>11,90€</p>
                        </div>
                        <div class="item-button">
                            <button onclick="quickAddToCart(event)"><strong>+</strong></button>
                        </div>
                    </div>
                </div>
            </article>
            <article onclick="ArticleManager.togglePopup()" id="plats-article-3" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Lasagne au boeuf maison, 200g</p>
                            <p>11,90€</p>
                        </div>
                        <div class="item-button">
                            <button onclick="quickAddToCart(event)"><strong>+</strong></button>
                        </div>
                    </div>
                </div>
            </article>
            <article onclick="ArticleManager.togglePopup()" id="plats-article-4" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Lasagne au boeuf maison, 200g</p>
                            <p>11,90€</p>
                        </div>
                        <div class="item-button">
                            <button onclick="quickAddToCart(event)"><strong>+</strong></button>
                        </div>
                    </div>
                </div>
            </article>
            <article onclick="ArticleManager.togglePopup()" id="plats-article-1" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Lasagne au boeuf maison, 200g</p>
                            <p>11,90€</p>
                        </div>
                        <div class="item-button">
                            <button onclick="quickAddToCart(event)"><strong>+</strong></button>
                        </div>
                    </div>
                </div>
            </article>
            <article onclick="ArticleManager.togglePopup()" id="plats-article-2" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Lasagne au boeuf maison, 200g</p>
                            <p>11,90€</p>
                        </div>
                        <div class="item-button">
                            <button onclick="quickAddToCart(event)"><strong>+</strong></button>
                        </div>
                    </div>
                </div>
            </article>
            <article onclick="ArticleManager.togglePopup()" id="plats-article-3" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Lasagne au boeuf maison, 200g</p>
                            <p>11,90€</p>
                        </div>
                        <div class="item-button">
                            <button onclick="quickAddToCart(event)"><strong>+</strong></button>
                        </div>
                    </div>
                </div>
            </article>
            <article onclick="ArticleManager.togglePopup()" id="plats-article-4" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Lasagne au boeuf maison, 200g</p>
                            <p>11,90€</p>
                        </div>
                        <div class="item-button">
                            <button onclick="quickAddToCart(event)"><strong>+</strong></button>
                        </div>
                    </div>
                </div>
            </article>

            <h3 id="menus" class="resto-subtitle">Menus</h3>

            <article onclick="ArticleManager.togglePopup()" id="menus-article-1" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Coucous grand-mère, 300g</p>
                            <p>8,90€</p>
                        </div>
                        <div class="item-button">
                            <button><strong>+</strong></button>
                        </div>
                    </div>
                </a>
            </article>
            <article onclick="ArticleManager.togglePopup()" id="menus-article-2" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Lasagne au boeuf maison, 200g</p>
                            <p>11,90€</p>
                        </div>
                        <div class="item-button">
                            <button onclick="quickAddToCart(event)"><strong>+</strong></button>
                        </div>
                    </div>
                </div>
            </article>
            <article onclick="ArticleManager.togglePopup()" id="menus-article-3" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Lasagne au boeuf maison, 200g</p>
                            <p>11,90€</p>
                        </div>
                        <div class="item-button">
                            <button onclick="quickAddToCart(event)"><strong>+</strong></button>
                        </div>
                    </div>
                </div>
            </article>
            <article onclick="ArticleManager.togglePopup()" id="menus-article-4" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Lasagne au boeuf maison, 200g</p>
                            <p>11,90€</p>
                        </div>
                        <div class="item-button">
                            <button onclick="quickAddToCart(event)"><strong>+</strong></button>
                        </div>
                    </div>
                </div>
            </article>
            
            <h3 id="desserts" class="resto-subtitle">Desserts</h3>

            <article onclick="ArticleManager.togglePopup()" id="desserts-article-1" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Lasagne au boeuf maison, 200g</p>
                            <p>11,90€</p>
                        </div>
                        <div class="item-button">
                            <button onclick="quickAddToCart(event)"><strong>+</strong></button>
                        </div>
                    </div>
                </div>
            </article>
            <article onclick="ArticleManager.togglePopup()" id="desserts-article-2" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Lasagne au boeuf maison, 200g</p>
                            <p>11,90€</p>
                        </div>
                        <div class="item-button">
                            <button onclick="quickAddToCart(event)"><strong>+</strong></button>
                        </div>
                    </div>
                </div>
            </article>
            <article onclick="ArticleManager.togglePopup()" id="desserts-article-3" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Lasagne au boeuf maison, 200g</p>
                            <p>11,90€</p>
                        </div>
                        <div class="item-button">
                            <button onclick="quickAddToCart(event)"><strong>+</strong></button>
                        </div>
                    </div>
                </div>
            </article>
            <article onclick="ArticleManager.togglePopup()" id="desserts-article-4" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Lasagne au boeuf maison, 200g</p>
                            <p>11,90€</p>
                        </div>
                        <div class="item-button">
                            <button onclick="quickAddToCart(event)"><strong>+</strong></button>
                        </div>
                    </div>
                </div>
            </article>

            <h3 id="boissons" class="resto-subtitle">Boissons</h3>

            <article onclick="ArticleManager.togglePopup()" id="boissons-article-1" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Lasagne au boeuf maison, 200g</p>
                            <p>11,90€</p>
                        </div>
                        <div class="item-button">
                            <button onclick="quickAddToCart(event)"><strong>+</strong></button>
                        </div>
                    </div>
                </div>
            </article>
            <article onclick="ArticleManager.togglePopup()" id="boissons-article-2" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Lasagne au boeuf maison, 200g</p>
                            <p>11,90€</p>
                        </div>
                        <div class="item-button">
                            <button onclick="quickAddToCart(event)"><strong>+</strong></button>
                        </div>
                    </div>
                </div>
            </article>
            <article onclick="ArticleManager.togglePopup()" id="boissons-article-3" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Lasagne au boeuf maison, 200g</p>
                            <p>11,90€</p>
                        </div>
                        <div class="item-button">
                            <button onclick="quickAddToCart(event)"><strong>+</strong></button>
                        </div>
                    </div>
                </div>
            </article>
            <article onclick="ArticleManager.togglePopup()" id="boissons-article-4" class="item">  
                <div>
                    <div>
                        <img class="photo-plat" src="img\resto_template_2.jpg" alt="PHOTO">
                    </div>
                    <div class="item-content">
                        <div class="item-description">
                            <p>Lasagne au boeuf maison, 200g</p>
                            <p>11,90€</p>
                        </div>
                        <div class="item-button">
                            <button onclick="quickAddToCart(event)"><strong>+</strong></button>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>


<div id="popup-overlay">
    <div class="popup-content">
        <div id="popup-img-content">
            <img src="img\lasagna.jpg" alt="">
        </div>
        <div id="popup-img-text">
            <h2>Nom du Plat</h2>
            <p>Description</p>
                <!-- addToCart -->
            <button onclick="ArticleManager.addToCart()" id="popup-button-addToCart" class="_borderradius10">Ajouter au panier pour {prix}</button>
        </div>
        <button onclick="ArticleManager.togglePopup()" id="popup-button-close">Fermer</button>
    </div>
</div>

<?php include 'footer.php'; ?>