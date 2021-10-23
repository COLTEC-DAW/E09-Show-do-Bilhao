<?php
    session_start();

    function SetCookies()
    {
        date_default_timezone_set('America/Sao_Paulo');
        setcookie(("UltimaSessao" . $_SESSION["user"]), date("j.n.Y, g:i a"), time() + (86400 * 30), '/');
        setcookie(("UltimosPontos" . $_SESSION["user"]), $_SESSION["points"], time() + (86400 * 30), '/');
    }

?> 