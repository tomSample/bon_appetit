<?php
session_start();
//$_SESSION['user_id'] = 1;       // décommenter pour simuler l'état de connexion : user connecté si =1
unset($_SESSION['user_id']);   // décommenter pour simuler la déconnexion (et commenter la ligne précédente)
$currentPage = basename($_SERVER['PHP_SELF']);
$isLoggedIn = isset($_SESSION['user_id']);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta type = description content ="">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="styles\styles.css" type="text/css">
<<<<<<< HEAD
        <link rel="stylesheet" href="styles\styles - inscription_restau.css" type="text/css">
=======
        <script src="js/app.js"></script>
>>>>>>> 5de79069baf0ce86680e2b7b7f558dc5a3e19e1f
        <title>Bon Appétit !</title>
    </head>
