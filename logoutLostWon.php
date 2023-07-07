<?php
    require("class/user.php");
    session_start();
    date_default_timezone_set('America/Sao_Paulo');
    $user = new User($_SESSION['user']);
    $username = $_SESSION['user'];
    setcookie($username."last", date('d/m H:i'), time() + 86400);
    $user->zeraPont();
    session_destroy();
    header("Location: index.php");
?>