<?php
    if(!isset($_SESSION['isLogged']))
        require "views/phps/login.php";
    else
        require "views/phps/perguntas.php";
?>