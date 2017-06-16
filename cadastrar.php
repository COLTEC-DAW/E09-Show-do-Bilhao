<?php
	//Importa as classe do POO
	require 'classes.php';

	//Pega os posts
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];

	//Transforma em objeto User
	$usuario = new User($nome, $email, $login, $senha);

	$arquivo = fopen("users.json", 'r');
	$arquivoDados = "";
	$originalidade = true;

	//Le o arquivo json
	while(!feof($arquivo)) {
		$arquivoDados .= fgets($arquivo);
	}

	//Decodifica JSON
	$arquivoDadosJSON = json_decode($arquivoDados);
	fclose($arquivo);
	
	//Verifica se login ja foi usado
	foreach ($arquivoDadosJSON as $pessoa) {
		if($pessoa->login == $login) {
			$originalidade = false;
			echo "<h2>Login ja utilizado</h2>";
			echo "<a href='/cadastro.php'>Tentar Novamente</a>";
		}
	}

	//Se nao houver login igual
	if($originalidade) {
		//Adiciona usuario novo no arquivo
		array_push($arquivoDadosJSON, $usuario);
		
		$arquivo = fopen("users.json", 'w');
		fwrite($arquivo, json_encode($arquivoDadosJSON, JSON_PRETTY_PRINT));
		fclose($arquivo);
		
		//Redireciona
		header("location: login.php");
	}
?>