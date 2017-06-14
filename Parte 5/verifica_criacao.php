<?php

  	session_start();


	$login = $_POST["nome"];
	$senha = $_POST["senha"];

	$nome = $_POST["name"];
	$email = $_POST["email"];
	
/*
		ESCRITA
*/

	$arquivo = fopen("users.json", "a");
	$arr = '{"Login":"'.$login.'","Senha":"'.$senha.'","Nome":"'.$nome.'","Email":"'.$email.'"}';
	fwrite($arquivo, "$arr\n");
	fclose($arquivo);

	setcookie("acaboudecadastrar", 1);

	$redirect = "login.php";
	header("location:$redirect");

?>