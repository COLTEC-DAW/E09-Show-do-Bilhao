<?php
 	session_start();

	$_POST["nome"];
	$_POST["senha"];

	//login
	//senha
	//email
	//nome
	
	$arquivo = fopen("users.txt", "a");
	$arr = '{"Login":"'.  .'","Senha":"'.$senha.'"}';
	fwrite($arquivo, "$arr\n");
	fclose($arquivo);
	$redirect = "login.php";
	header("location:$redirect");

?>