<?php
    session_start();
    $_SESSION["login"] = $_POST["username"];
    $_SESSION["senha"] = $_POST["password"];

    header('location: http://localhost:3000?id=1');
?>