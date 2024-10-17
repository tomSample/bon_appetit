<?php include 'layout.php'; ?>
<?php include 'header.php'; ?>
<?php include 'items.php'; ?>
<?php include 'users.php'; ?>
<link rel="stylesheet" href="styles\checkout.css" type="text/css">

<section id="checkout-body">

<!-- Adresses de livraison -->

    <div id="checkout-container-left">
        <div id="checkout-content">
            <div id="checkout-content-title">
                <div id="checkout-delivery-address-title" onclick="toggleAddDeliveryadress()"><h2>Adresse de livraison</h2></div>
                <span class="material-symbols-outlined">home_work</span>
            </div>
            <div onclick="checkRadio('address-1')" id="checkout-content-box">
                <div>
                    <input type="radio" name="address" id="address-1">
                </div>
                <div id="checkout-radio-box">
                    <div>
                        <?php if ($isLoggedIn) :?>
                        <?php echo $users[0]['username'] . ', ' . $users[0]['delivery-address'][0]['address'] . ', ' . $users[0]['delivery-address'][0]['postal-code']; ?>
                        <?php endif; ?>                   
                    </div>
                </div>
            </div>
            <div>
                <div onclick="checkRadio('address-2')" id="checkout-content-box">
                    <div>
                        <input type="radio" name="address" id="address-2">
                    </div>
                    <div id="checkout-radio-box">
                        <div>
                            <?php if ($isLoggedIn) :?>
                            <?php echo $users[1]['username'] . ', ' . $users[0]['delivery-address'][1]['address'] . ', ' . $users[0]['delivery-address'][1]['postal-code'];?>
                            <?php endif; ?>          
                        </div>
                    </div>
                </div>
            </div>

<!-- Modifier/Ajouter de livraison -->

            <div>
                <div id="checkout-address-edit">
                    <h3>Ajouter/Modifier une adresse</h3>
                    <span class="material-symbols-outlined">edit</span>
                </div>
            </div>


        </div>

<!-- Modes de paiement -->

        <div id="checkout-content">
            <div id="checkout-content-title">
                <div id="checkout-delivery-address-title" onclick="toggleAddPaymentMode()"><h2>Moyens de paiement</h2></div>
                <span class="material-symbols-outlined">payments</span>
            </div>
            <div onclick="checkRadio('payment-1')" id="checkout-content-box">
                <div>
                    <input type="radio" name="payment-1" id="payment-1">
                </div>
                <div id="checkout-radio-box">
                    <div>
                        <p>VISA 4971 8545 2245 7889</p>
                    </div>
                </div>
            </div>

<!-- Modifier/Ajouter un moyen de paiement -->

        <div>
            <div id="checkout-payement-edit">
                <h3>Ajouter/Modifier</h3>
                <span class="material-symbols-outlined">edit</span>
            </div>
        </div>
    </div>
</div>

<!-- Récapitulatif commande et bouton commander/payer -->

    <div id="checkout-container-right">
        <div id="checkout-content">
            <div id="checkout-content-title">
                <div id="checkout-recap-title"><h2>Récapitulatif</h2></div>
            </div>

<!-- Récapitulatif commande récupérée du drawer (nom de classe/id) -->

            <div id="restaurant-drawer-item-content">
                <?php
                //vérifier que le panier existe est n'est pas vide
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                    foreach ($_SESSION['cart'] as $item) {
                        echo "<div id='restaurant-drawer-cart-box'>
                                <div id='restaurant-drawer-item-details'>
                                    <div id='restaurant-drawer-item'>
                                        {$item['name']} {$item['price']}€
                                    </div>

                                    <div id='restaurant-drawer-item-quantity'>
                                        <button onclick=\"decreaseQuantity('{$item['id']}')\"><strong>-</strong></button>
                                        {$item['quantity']}
                                        <button onclick=\"increaseQuantity('{$item['id']}')\"><strong>+</strong></button>
                                    </div>
                                </div>
                            </div>";
                    }
                } else {
                    echo "<p>Votre panier est vide</p>";
                }
                ?>
            </div>
            <div id="confirm-order-button-box">
                <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) { ?>
                <button id="confirm-order-button" href="" class="_borderradius10">Commander et payer</button> <?php } ?>
            </div>

            <div id="checkout-content">
                <div>
                    <h3>Total commande</h3>
                </div>
                <div id="checkout-content-box">
                    <div>
                        <p>Sous-total</p>
                    </div>
                    <div>
                        <p>"formule calcul"</p>
                    </div>
                </div>

                <div id="checkout-content-box">
                    <div>
                        <p>Livraison</p>
                    </div>
                    <div>
                        <p>"formule calcul"</p>
                    </div>
                </div>

                <div id="checkout-content-box">
                    <div>
                        <h4>Total</h4>
                    </div>
                    <div>
                        <p>"formule calcul"</p>
                    </div> 

                </div>
            </div>
        </div>
    </div>

</section>