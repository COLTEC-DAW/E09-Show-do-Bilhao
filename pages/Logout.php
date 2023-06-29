<?php
require ("../users/User.php");
session_start();
$username =  $_SESSION["user"];
$user = new User(null, null, $username, null);
$user->setLastSession();
session_destroy();
header('Location: MainPage.php');
exit();
?>