<?php

  	session_start();
	require 'classes.php';

  	$falha = 1;

	$login = $_POST["nome"];
	$senha = $_POST["senha"];

	$permissao = 0;

/*
		LEITURA
*/

	$arquivo = fopen("users.json", "r");
	while(!feof($arquivo)) {
		$linha = fgets($arquivo);
		if($linha!=null){
			$aux = json_decode($linha);
			$login_arq = $aux->{'Login'};
			if($login_arq == $login){
				$senha_arq = $aux->{'Senha'};
				if($senha_arq == $senha){
					$permissao = 1;
					$login_arq = $aux->{'Login'};
					$senha_arq = $aux->{'Senha'};
					$nome_arq = $aux->{'Nome'};
					$email_arq = $aux->{'Email'};

					$usuario = new User($nome_arq, $email_arq, $login_arq, $senha_arq);
				}
			}
		}
	}
	fclose($arquivo);

	if ($permissao == 1) {

		$falha = 1;

		setcookie('falha', $falha);
		setcookie("usuario",$login);

		$_SESSION["login"] = $login;
		$_SESSION["senha"] = $senha;

		$redirect = "info.php";
		header("location:$redirect");
	} else {
		$falha = 0;

		setcookie('falha', $falha);

		$redirect = "login.php";
		header("location:$redirect");
	}

?>