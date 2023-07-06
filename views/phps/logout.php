<?php
    session_start();
    setcookie($_SESSION["user"] . "-lastLogin", date("d/m/Y H:i:s"));
    session_destroy();
    header('location: ../../index.php');
?>