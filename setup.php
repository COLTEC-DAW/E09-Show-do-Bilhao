<?php
	ob_start();
	session_start();

	$_SESSION["login"] = $_POST['login'];
	$_SESSION["senha"] = $_POST['senha'];

	setcookie("ultimaPontuacao", 0);
	setcookie("perguntaAtual", null);

	header("location: pergunta.php");
?>