<!DOCTYPE html>
<html>
	<head>
		<title>Show do Bilhão</title>
		<meta charset="utf-8">
	</head>

	<body>
		<?php include("menu.inc"); ?>
		<?php require 'perguntas.inc'; ?>

		<?php
			$id = $_GET["id"];
			$dados = carregaPergunta($id);

			//Exibicao
			echo $id + 1 . ") " . $dados[0];
			echo "<ul>";

			for ($j = 0; $j < 5; $j++) { 
				echo "<li>" . $dados[1][$j] . "</li>";
			}

			echo "</ul>";
		?>

		<?php include("rodape.inc"); ?>
	</body>
</html>