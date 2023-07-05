<?php
session_start();
setcookie('numeroAcertos');
session_destroy();
header('location: index.php');
?>