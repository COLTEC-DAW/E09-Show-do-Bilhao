<?php
	//ob_start();
	session_start();

	$_SESSION["login"] = $_POST['login'];
	$_SESSION["senha"] = $_POST['senha'];

	setcookie("ultimaPontuacao", 0);
	setcookie("perguntaAtual", 0);

	setcookie("ultimaHoraJogado", date("d/m/Y h:i:s"));

	header("location: pergunta.php");
?>