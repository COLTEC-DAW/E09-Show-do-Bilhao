<?php

  	session_start();

  	require "classes.php";


	$login = $_POST["nome"];
	$senha = $_POST["senha"];

	$nome = $_POST["name"];
	$email = $_POST["email"];

	$usuario = new User($nome, $email, $login, $senha);
/*
		ESCRITA
*/

	$arquivo = fopen("users.json", "a");
	$arr = '{"Login":"'.$usuario->login.'","Senha":"'.$usuario->senha.'","Nome":"'.$usuario->nome.'","Email":"'.$usuario->email.'"}';
	fwrite($arquivo, "$arr\n");
	fclose($arquivo);

	setcookie("acaboudecadastrar", 1);

	$redirect = "login.php";
	header("location:$redirect");

?>