<!DOCTYPE html>
<html>
	<head>
		<title>Show do Bilhão</title>
		<meta charset="utf-8">
	</head>

	<body>
		<?php include("menu.inc"); ?>
		<?php require 'perguntas.php'; ?>
		<?php require 'exibidor.php'; ?>

		<?php
			//Inicia sessao
			session_start();

			//Verifica se ja ta logado
			if(!$_SESSION["login"]) {
				//Pega dados de login
				$login = $_POST["login"];
				$senha = $_POST["senha"];
			} else {				
				$login = $_SESSION["login"];
				$senha = $_SESSION["senha"];
			}

			//Verifica se ta logado
			if(!$login) {
				//Redireciona para login
				header("Location: login.php");
			} else {
				//Loga na sessao
				$_SESSION["login"] = $login;
				$_SESSION["senha"] = $senha;

				//Pega cookies
				$id = $_COOKIE["id"];
				$lastScore = $_COOKIE["lastScore"];
				$lastDate = $_COOKIE["lastDate"];

				//Carrega e exibe a proxima pergunta
				$dados = carregaPergunta($id);
				exibePergunta($id, $dados);
			}
		?>

		<?php include("rodape.inc"); ?>
	</body>
</html>