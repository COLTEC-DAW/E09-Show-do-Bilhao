<?php
    session_start();
    setcookie("data", date("d/m/Y h:i:s", time()));
	$ultima_pontuacao = $_COOKIE['pontuacao'];
	setcookie("ultima_pontuacao", $ultima_pontuacao);
    session_destroy();
    $redirect = "login.php";
    header("location:$redirect");
?>