<?php
    session_start();
    date_default_timezone_set('America/Sao_Paulo');   
    setcookie("date", date("d/m/Y H:i:s")); //date("d/m/Y H:i:s");
    setcookie("lastpt", ($_COOKIE['n_id']));
    session_destroy();
    header('Location: index.php');
?>