<?php
    if (session_status() !== PHP_SESSION_ACTIVE) 
    {
        header("Location: http://localhost/DAW-E09/telaLogin.php");
    }
    else
    {
        header("Location: http://localhost/DAW-E09/telaInicio.php");
    }

?>