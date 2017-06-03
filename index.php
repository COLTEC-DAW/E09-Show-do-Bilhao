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
			//Pega o ID da pergunta
			$id = $_COOKIE["id"];

			if(!$id) {
				$id = 0;
				setcookie("id", $id);
			}

			$dados = carregaPergunta($id);
			exibePergunta($id, $dados);				
		?>

		<?php include("rodape.inc"); ?>
	</body>
</html>