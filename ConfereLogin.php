<?php
	
	$nome=$_POST['nome'];
	$senha=$_POST['pwd'];
	setcookie("Login", $nome);

	if($nome=="oi" && $senha=="oi"){
		session_start();
		$_SESSION["nome"] = $nome;
		$_SESSION["senha"] = $senha;
		header("Location: perguntas.php?id=0");
	}



?>