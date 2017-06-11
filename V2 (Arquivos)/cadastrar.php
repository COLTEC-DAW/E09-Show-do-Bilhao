<?php
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$login = $_POST["login"];
	$senha = $_POST["senha"];

	$NovaPessoa = (object) array("nome" => $nome, "email" => $email, "login" => $login, "senha" => $senha);
	$arquivo = fopen("users.json", 'r');
	$dados = "";
	$novo = true;
	
    while(!feof($arquivo)) {
		$dados .= fgets($arquivo);
	}

	$pessoas = json_decode($dados);
	fclose($arquivo);
	
	//Verifica se login ja foi usado
	foreach ($pessoas as $pessoa) {
		if($pessoa->login == $login) {
			$novo = false;
			echo "<h2>Esse nome já está em uso</h2>";
			echo "<a href='/cadastro.php'>Tentar Novamente</a>";
		}
	}
	if($novo) {
		array_push($pessoas, $NovaPessoa);
		
		$arquivo = fopen("users.json", 'w');
		fwrite($arquivo, json_encode($pessoas, JSON_PRETTY_PRINT));
		fclose($arquivo);
		
		//De volta ao login
		header("location: login.php");
	}
?>