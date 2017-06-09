<?php
	session_start();

	$_SESSION["login"] = $_POST['login'];
	$_SESSION["senha"] = $_POST['senha'];

	setcookie("ultimaPontuacao", 0);

	header("location: pergunta.php");
?>