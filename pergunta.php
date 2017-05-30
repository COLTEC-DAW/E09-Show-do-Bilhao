<!DOCTYPE html>
<html>
<head>
	<title>Show do Bilhão</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		include 'menu.inc';
		require 'functions.inc';

		global $perguntas;
		$perguntas = array("1 + 1 = ?", "Qual a fruta que se seca para fazer a ameixa seca?", "De qual grupo de samba fez parte o humorista \"Mussum\"?", "Qual desses símbolos significa quilômetro?","Qual é o animal que representa o signo de touro?","Como é chamada a doença que clareou a pele do Michael Jackson?");

		global $alternativas;
		$alternativas = array(
			array("1","2","0","3"),
			array("Ameixa","Maçã","Laranja","Melão"),
			array("Fundo de Quintal","Titulares do Ritmo","Originais do Samba","Banda Brasil"),
			array("KD","KM","KK","KG"),
			array("Touro","Cavalo","Hipopótamo","Galo"),
			array("Astigmatismo","Pedofilia","Vitiligo","Bruxismo")
		);

		$respostas = array(2, 1, 3, 2, 3);

		$numPergunta = $_GET["id"];
		carregaPergunta($numPergunta);

		include 'rodape.inc';
	?>
</body>
</html>