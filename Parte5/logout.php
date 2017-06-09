<?php
    session_start();
    date_default_timezone_set('America/Sao_Paulo');   
    setcookie($_SESSION["login"]."date", date("d/m/Y H:i:s"));
    setcookie($_SESSION["login"]."lastpt", ($_COOKIE['n_id']));
    session_destroy();
    header('Location: index.php');
?>