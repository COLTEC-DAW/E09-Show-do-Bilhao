<?php
    session_start();
    session_destroy();
    $redirect = "login.php";
    header("location:$redirect");
?>