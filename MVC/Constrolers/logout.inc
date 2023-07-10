<?php 
    if(isset($_POST["logout"])) {
        unset($_SESSION["usuario"]);
        unset($_POST["logout"]);
        session_destroy();
        if(isset($_SESSION["usuario"])) {
            // Seta o cookie de pontos
            setcookie("pontos", $game->pontuacao);
            setcookie("user", $_SESSION["usuario"]->user);
        }
    }
?>