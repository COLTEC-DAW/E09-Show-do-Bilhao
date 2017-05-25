<!DOCTYPE html>
<html>
<head>
	<title>Show do Bilhão</title>
	<meta charset="utf-8">
</head>
<body>
	<?php require("functions.inc"); ?>
	<h1 style="text-align: center;color: #7cfc00;text-shadow: 2px 2px darkgreen">$how do Bilhão</h1>
	<?php
		$perguntas = array("1 + 1 = ?", "Qual a fruta que se seca para fazer a ameixa seca?", "De qual grupo de samba fez parte o humorista \"Mussum\"?", "Qual desses símbolos significa quilômetro?","Qual é o animal que representa o signo de touro?","Como é chamada a doença que clareou a pele do Michael Jackson?");
		$alternativas = array(
			array("1","2","0","3"),
			array("Ameixa","Maçã","Laranja","Beterraba"),
			array("Fundo de Quintal","Titulares do Ritmo","Originais do Samba","Banda Brasil"),
			array("KD","KM","KK","KG"),
			array("Touro","Cavalo","Hipopótamo","Galo"),
			array("Astigmatismo","Pedofilia","Vitiligo","Bruxismo")
		);
		$respostas = array(2, 1, 3, 2, 3);
		carregaPergunta(1);
		/*foreach ($perguntas as $index1 => $info1) {
			echo "<h3>" . ++$index1 . " - $info1<br></h3>";
			$index1--;
			foreach ($alternativas[$index1] as $index2 => $info2) {
				switch ($index2) {
					case '0': echo "a)";
						break;
					case '1': echo "b)";
						break;
					case '2': echo "c)";
						break;
					case '3': echo "d)";
						break;
				}
				echo " $info2<br>";
			}
			echo "<br>";
		}*/
	?>
</body>
</html>