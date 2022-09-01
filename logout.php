<?php
    session_start();
    setcookie($_SESSION["user"] . "-lastLogin", time());
    session_destroy();
    header("Location: index.php");
?>
