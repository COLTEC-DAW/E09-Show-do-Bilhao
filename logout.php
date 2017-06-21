<?php
	session_start();
    include "head.inc";
    include "menu.inc";
    date_default_timezone_set('America/Sao_Paulo');
    setcookie("data", date('d/m/Y H:i:s'));

  

    echo "<h2 align='center'> Fim de jogo! </h2>";
    echo "<h2 align='center'> Pontuação final: " . $_SESSION["pont"] . " </h2>";



    session_destroy(); //fim de sessao
?>