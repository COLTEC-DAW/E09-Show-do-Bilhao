<?php
    session_start();

    setcookie("falha", 1);
    date_default_timezone_set('America/Sao_Paulo');


	$ultima_pontuacao = $_COOKIE['pontuacao'];
	$user = $_COOKIE['usuario'];


	$aux = $user."data";
	setcookie($aux, date("d/m/Y H:i:s"));

	$aux2 = $user."ultima_pontuacao";
	setcookie($aux2, $ultima_pontuacao);

    session_destroy();
    $redirect = "login.php";
    header("location:$redirect");
?>