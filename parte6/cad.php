<?php
 	session_start();

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];

	require 'classes.php';

	$newUser = new User($nome, $email, $login, $senha);

	$arq = fopen('C:\xampp\htdocs\users.json', 'r');
	$dados = "";

	for(;!feof($arq);)
		$dados .= fgets($arq);

	$dadosJason = json_decode($dados);
	array_push($dadosJason, $newUser);

	$arq = fopen('C:\xampp\htdocs\users.json', 'w');
	fwrite($arq,json_encode($dadosJason, JSON_PRETTY_PRINT));
	fclose($arq);

	$redirect = "login.php";
	header("location:$redirect");

?>