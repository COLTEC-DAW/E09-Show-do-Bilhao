<?php
    session_start();
    setcookie($_SESSION["user"] . "-lastLogin", time());
    session_destroy();
    require "~/index.php";
?>