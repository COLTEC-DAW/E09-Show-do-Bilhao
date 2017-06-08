<?php

  	session_start();


	$login = $_POST["nome"];
	$senha = $_POST["senha"];

	$nome = $_POST["name"];
	$email = $_POST["email"];
	
/*
		ESCRITA
*/

	$arquivo = fopen("users.txt", "a");
	$arr = '{"Login":"'.$login.'","Senha":"'.$senha.'","Nome":"'.$nome.'","Email":"'.$email.'"}';
	fwrite($arquivo, "$arr\n");
	fclose($arquivo);

	$redirect = "login.php";
	header("location:$redirect");

?>