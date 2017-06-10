<!DOCTYPE html>
<html>
	<head>
		<title>Show do Bilhão</title>
		<meta charset="utf-8">
	</head>

	<body>
		<?php include("menu.inc"); ?>
		<?php
			require 'perguntas.php';
			require 'exibidor.php';
			require 'validador.php';

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
			} else if(validar($login, $senha)) {
				//Loga na sessao
				$_SESSION["login"] = $login;
				$_SESSION["senha"] = $senha;

				//Pega cookies
				$id = $_COOKIE["id"];
				if(!$id) {
					$id = 0;
				}
				
				$lastScore = $_COOKIE["lastScore"];
				$lastDate = $_COOKIE["lastDate"];

				//Carrega e exibe a proxima pergunta
				$dados = carregaPergunta($id);
				exibePergunta($id, $dados);
			} else {
				echo "<h2>Login ou senha incorretos</h2>";
				echo "<a href='/login.php'>Tentar Novamente</a>";
			}

			include("rodape.inc");
		?>
	</body>
</html>