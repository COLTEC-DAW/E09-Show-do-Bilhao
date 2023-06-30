<?php
require ("../users/User.php");
session_start();
$username =  $_SESSION["user"];
setcookie($username, date('d/m H:i'), time() + 86400);
session_destroy();
header('Location: MainPage.php');
exit();
?>