<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Show do Bilhão</title>
</head>
<body>
	<h1>Show do Bilhão!</h1>

	<?php
		//Questão 1
		$enunciado[0] = "Qual destes órgãos não faz parte do sistema digestivo?";
		$alternativa[0][0] = "BRÔNQUIOS";
		$alternativa[0][1] = "BOCA";
		$alternativa[0][2] = "FARINGE";
		$alternativa[0][3] = "BRÔNQUIOS";
		$certa[0] = 0;

		//Questão 2
		$enunciado[1] = "O que é labrador?";
		$alternativa[1][0] = "RAÇA DE GATO";
		$alternativa[1][1] = "RAÇA DE GADO";
		$alternativa[1][2] = "RAÇA DE CACHORRO";
		$alternativa[1][3] = "RAÇA DE CAVALO";
		$certa[1] = 2;

		//Questão 3
		$enunciado[2] = "O que se encontra no final do arco-íris?";
		$alternativa[2][0] = "SACO DE DIAMANTES";
		$alternativa[2][1] = "POTE DE OURO";
		$alternativa[2][2] = "BARRA DE PRATA";
		$alternativa[2][3] = "ESMERALDAS";
		$certa[2] = 1;

		//Questão 4
		$enunciado[3] = "Quem é considerado o rei do mundo animal?";
		$alternativa[3][0] = "ELEFANTE";
		$alternativa[3][1] = "GORILA";
		$alternativa[3][2] = "LEÃO";
		$alternativa[3][3] = "RINOCERONTE";
		$certa[3] = 2;

		//Questão 5
		$enunciado[4] = "O que está no centro da Terra?";
		$alternativa[4][0] = "MANTO";
		$alternativa[4][1] = "NÚCLEO";
		$alternativa[4][2] = "HIDROSFERA";
		$alternativa[4][3] = "LITOSFERA";
		$certa[4] = 1;

		$aux = 1;
		$escolha = 1;
		for($cont = 0; $cont < 5; $cont++) {
			echo "<h2>"."Questão $aux"."</h2>";
			$aux++;
			echo "<h3>".$enunciado[$cont]."</h3>";
			for($i=0;$i<4;$i++){
				echo "<p>".$escolha.".".$alternativa[$cont][$i]."</p>";
				$escolha++;
			}
			$escolha = 1;
			echo "<br>";
		}
	?>
	
</body>
</html>