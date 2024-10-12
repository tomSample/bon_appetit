<?php include 'layout.php'; ?>
<?php include 'header.php'; ?>
<?php include 'items.php'; ?>
<link rel="stylesheet" href="styles\shopping-cart.css" type="text/css">

<section id="shopping-cart-body">

<div id="shopping-cart-container-left">
    <div id="shopping-cart-content">
        <div id="shopping-cart-content-title">
            <h2>Détails</h2>
        </div>
        <div id="shopping-cart-content-box">
            <div>
                <h3>À emporter</h3>
            </div>
            <div id="shopping-cart-button-box">
                <button id="take-away-button" class="cart-modify-button">Modifier</button>
            </div>
        </div>
        <div>
            <div id="shopping-cart-content-box">
                <div>
                    <h3>À domicile</h3>
                </div>
                <div id="shopping-cart-button-box">
                    <button id="delivery-button" class="cart-modify-button">Modifier</button>
                </div>
            </div>
        </div>
    </div>

    <div id="shopping-cart-content">
        <div id="shopping-cart-content-title">
            <h2>Moyens de paiement</h2>
        </div>
        <div id="shopping-cart-content-box">
            <div>
                <h3>Visa 4971 8545 ...</h3>
            </div>
            <div id="shopping-cart-button-box">
                <button id="take-away-button" class="cart-modify-button">Modifier</button>
            </div>
        </div>
    </div>
</div>


<div id="shopping-cart-container-right">
    <div id="shopping-cart-content">
        <div id="shopping-cart-content-title">
            <a id="shopping-cart-recap-title" onclick="toggleCart()"><h2>Récapitulatif</h2><span onclick="toggleArrow()" id="recap-arrow" class="material-symbols-outlined">keyboard_arrow_down</span></a>
        </div>
        <div id="shopping-cart-item-recap">
                <?php
                //vérifier que le panier existe est n'est pas vide
                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                        // Display cart items
                        foreach ($_SESSION['cart'] as $item) {
                            echo "<div id='shopping-cart-item'>{$item['name']} - {$item['quantity']} - {$item['price']}€</div>";
                        }
                    } else {
                        // Display message if cart is empty
                        echo "<p>Votre panier est vide</p>";
                    }
                    ?>
            </div>
            <div id="confirm-order-button-box">
                <?php if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) { ?>
                <button id="confirm-order-button" href="" class="_borderradius10">Commander et payer</button> <?php } ?>
            </div>
        </div>
    </div>
</div>
















</section>
<?php include 'footer.php'; ?>