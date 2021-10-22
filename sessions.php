<?php
    session_start();

    function defineCookies()
    {


        date_default_timezone_set('America/Sao_Paulo');
        setcookie(("lastGame" . $_SESSION["user"]), date("j.n.Y, g:i a"), time() + (86400 * 30), '/');
        setcookie(("lastPoints" . $_SESSION["user"]), $_SESSION["points"], time() + (86400 * 30), '/');
    }

    function deslogar()
    {
        defineCookies();
        session_unset();
        session_destroy();
    }

?> 