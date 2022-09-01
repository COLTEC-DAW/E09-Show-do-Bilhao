<?php
    session_start();
    setcookie($_SESSION["user"] . "-lastLogin", date('d/m/Y | h:i'));
    session_destroy();
    header("Location: index.php");
?>