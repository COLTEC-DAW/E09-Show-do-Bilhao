<?php
    session_start();

    if(!isset($_SESSION['isLogged']))
        header('location: views/phps/login.php');
    else
        header('location: views/phps/perguntas.php');
?>