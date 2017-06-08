<?php
	session_start();
    include "head.inc";
    include "menu.inc";
    global $pont;
    $pont = $_COOKIE['pont'];
    echo "<h2 align='center'> Fim de jogo! </h2>";
    echo "<h2 align='center'> Pontuação final: " . $pont . " </h2>";
    session_destroy(); //fim de sessao
?>