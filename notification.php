<?php
$etatCommande = 'reçue';

if (isset($etatCommande)) {
    echo "<div id='notification-container'>";
    echo    "<div id='notification-content'>";
    echo        "<div id='notification-bar'></div>";
    echo        "<div id='notification-dot-1'></div>";
    echo        "<div id='notification-dot-2'></div>";
    echo        "<div id='notification-dot-3'></div>";
    echo        "<div id='notification-dot-4'></div>";
    echo        "<div id='notification'>Commande " . $etatCommande . "</div>";
    echo    "</div>";
    echo "</div>";
}