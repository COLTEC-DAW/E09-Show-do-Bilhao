<?php
    session_start();
    date_default_timezone_set('Brazil/East');
    $lastSession = date('d/m/Y, H:i:s');
    setcookie($_SESSION["user"] . "-lastLogin", $lastSession);
    session_destroy();
    header("Location: index.php");
?>