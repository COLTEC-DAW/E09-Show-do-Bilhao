<!DOCTYPE html>
<html>
<head>
	<title>Show do Bilhão</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$perguntas = array("1 + 1 =", "Qual a fruta que se seca para fazer a ameixa seca?");
		$respostas = array(
			array("1", "2", "0", "3"),
			array("Ameixa", "Maçã", "Laranja", "Beterraba")
		);
		echo "$perguntas[0]";
		foreach ($perguntas as $i) {
			echo "$i<br>";
		}
	?>
</body>
</html>