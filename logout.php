<?php
    session_start();
    setcookie($_SESSION["user"] . "-lastLogin", date("Y-m-d", time()));
    session_destroy();
    header("Location: index.php");
?>