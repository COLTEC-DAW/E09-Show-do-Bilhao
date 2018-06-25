<?php
    session_start();
    session_destroy();
    header('Location: /login.php');
    setcookie("sair", 0);
?>