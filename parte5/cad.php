<?php
 	session_start();

	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];

	if (!file_exists('C:\xampp\htdocs\users.json')){
		$arquivo = fopen('C:\xampp\htdocs\users.json', "a");
		$dados = '[{"Nome":"'.$nome.'","Email":"'.$email.'","Login":"'.$login.'","Senha":"'.$senha.'"}' . "\n]";
		fwrite($arquivo, $dados);
	}
	else{
		$arr = file('C:\xampp\htdocs\users.json');
		$dados = ',{"Nome":"'.$nome.'","Email":"'.$email.'","Login":"'.$login.'","Senha":"'.$senha.'"}';
		array_pop($arr);
		$arquivo = fopen('C:\xampp\htdocs\users.json', "w+");
		fwrite($arquivo,implode(PHP_EOL, $arr));
		fclose($arquivo);
		$arquivo = fopen('C:\xampp\htdocs\users.json', "a");
		fwrite($arquivo,$dados ."\n]");
	}

	fclose($arquivo);

	$redirect = "login.php";
	header("location:$redirect");

?>