<?php
    require("class/user.php");
    session_start();
    $user = new User($_SESSION['user']);
    $username = $_SESSION['user'];
    setcookie($username."pont", $user->__getAtual(), time() + 86400);
    setcookie($username."last", date('d/m H:i'), time() + 86400);
    $user->zeraPont();
    session_destroy();
    header("Location: index.php");
?>