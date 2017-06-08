<?php
	
	$nome=$_POST['nome'];
	$senha=$_POST['pwd'];
	setcookie("Login", $nome);

	if($nome=="oi" && $senha=="oi"){
		session_start();
		$_SESSION["nome"] = $nome;
		$_SESSION["senha"] = $senha;
		date_default_timezone_set('America/Sao_Paulo');
		setcookie("data", date('d/m/Y H:i:s'));


		header("Location: perguntas.php?id=0");
	}



?>