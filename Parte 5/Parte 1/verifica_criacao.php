<?php

  	session_start();


	$login = $_POST["nome"];
	$senha = $_POST["senha"];
	
/*
		ESCRITA
*/

	$arquivo = fopen("users.txt", "a");
	$arr = '{"Login":"'.$login.'","Senha":"'.$senha.'"}';
	fwrite($arquivo, "$arr\n");
	fclose($arquivo);

	$redirect = "login.php";
	header("location:$redirect");

?>