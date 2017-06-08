<?php

  	session_start();

  	$falha = 1;

	$login = $_POST["nome"];
	$senha = $_POST["senha"];

	$permissao = 0;

/*
		LEITURA
*/

	$arquivo = fopen("users.txt", "r");
	while(!feof($arquivo)) {
		$linha = fgets($arquivo);
		if($linha!=null){
			$aux = json_decode($linha);
			$login_arq = $aux->{'Login'};
			if($login_arq == $login){
				$senha_arq = $aux->{'Senha'};
				if($senha_arq == $senha){
					$permissao = 1;
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