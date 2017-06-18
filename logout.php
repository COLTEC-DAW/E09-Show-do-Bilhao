<?php
    session_start();
    setcookie("data", date("d/m/Y h:i:s", time()));
	$pontos_ultima = $_COOKIE['pontuacao'];
	setcookie("ultima_pontuacao", $pontos_ultima);
    session_destroy();
    header("location:login.php");
?>