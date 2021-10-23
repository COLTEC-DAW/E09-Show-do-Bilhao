<?php
    SetCookies();
    session_unset();
    session_destroy();
    header("Location: LoginPage.php");
?>