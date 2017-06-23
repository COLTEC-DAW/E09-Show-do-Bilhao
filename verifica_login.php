<?php

  	session_start();

	$login = $_POST["nome"];
	$senha = $_POST["senha"];

	$falha = 1;
	$permissao = 0;

	$arquivo = fopen("usuarios.json", "r");
	while(!feof($arquivo)) 
	{
		$linha = fgets($arquivo);
		if($linha!=null){
			$aux = json_decode($linha);
			$login_arq = $aux->{'Login'};
			if($login_arq == $login)
			{
				$senha_arq = $aux->{'Senha'};
				if($senha_arq == $senha)
				{
					$permissao = 1;
				}
			}
		}
	}
	fclose($arquivo);

	if ($permissao == 1) 
	{

		$falha = 1;

		setcookie('falha', $falha);
		setcookie("usuario",$login);

		$_SESSION["login"] = $login;
		$_SESSION["senha"] = $senha;

		$redirect = "perguntas.php?id=0";
		header("location:$redirect");
	} else 
	{
		$falha = 0;

		$redirect = "logiasasn.php";
		header("location:$redirect");

		echo "<script>alert('DEU ERRO NA ENTRADA QUE VC DIGITOU');</script>";
		sleep(3);
		setcookie('falha', $falha);

		$redirect = "login.php";
		header("location:$redirect");
	}


?>