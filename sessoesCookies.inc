<?php
    session_start();

    function defineGameCookies($ultimojogo)
    {
        setcookie("lastGame". $_SESSION["user"], $ultimojogo);
    }

    function defineAcessCookies()
    {
        date_default_timezone_set('America/Sao_Paulo');
        setcookie("lastAcess". $_SESSION["user"], date('d/m/Y\, \à\s H:i'));
    }

    function logoutSession()
    {
        defineAcessCookies();
        session_unset();
        session_destroy();
    }

    function newSession()
    {
        if(isset($_GET["name"]))
        {
            $_SESSION["user"] = $_GET["name"];
        }
    }
?>