<?php
session_name('BonAppetit');
session_start();
session_unset();
session_destroy();
header('Location: index.php');
exit;