<?php
session_name('BonAppetit');
session_start();

$username = $_SESSION['user_name'] ?? '';
$role = $_SESSION['user_role'] ?? '';
$isLoggedIn = isset($_SESSION['user_email']);
$currentPage = basename($_SERVER['PHP_SELF']);
$postData = $_POST;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta type = description content ="">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
        <link rel="stylesheet" href="styles\styles.css" type="text/css">
        <script src="js\app.js"></script>
        <script src="js\carousel.js"></script>
        <script src="js\administration.js"></script>
        <title>Bon Appétit !</title>
        <link rel="icon" type="image/png" href="/img/favicon.ico">
    </head>
