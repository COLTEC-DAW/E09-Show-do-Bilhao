<?php
	//Questão 1
	$enunciado[0] = "1 - Qual destes órgãos não faz parte do sistema digestivo?";
	$alternativa[0][0] = "1. BRÔNQUIOS";
	$alternativa[0][1] = "2. BOCA";
	$alternativa[0][2] = "3. FARINGE";
	$alternativa[0][3] = "4. BRÔNQUIOS";
	$certa[0] = 0;

	//Questão 2
	$enunciado[1] = "2 - O que é labrador?";
	$alternativa[1][0] = "1. RAÇA DE GATO";
	$alternativa[1][1] = "2. RAÇA DE GADO";
	$alternativa[1][2] = "3. RAÇA DE CACHORRO";
	$alternativa[1][3] = "4. RAÇA DE CAVALO";
	$certa[1] = 2;

	//Questão 3
	$enunciado[2] = "3 - O que se encontra no final do arco-íris?";
	$alternativa[2][0] = "1. SACO DE DIAMANTES";
	$alternativa[2][1] = "2. POTE DE OURO";
	$alternativa[2][2] = "3. BARRA DE PRATA";
	$alternativa[2][3] = "4. ESMERALDAS";
	$certa[2] = 1;

	//Questão 4
	$enunciado[3] = "4 - Quem é considerado o rei do mundo animal?";
	$alternativa[3][0] = "1. ELEFANTE";
	$alternativa[3][1] = "2. GORILA";
	$alternativa[3][2] = "3. LEÃO";
	$alternativa[3][3] = "4. RINOCERONTE";
	$certa[3] = 2;

	//Questão 5
	$enunciado[4] = "5 - O que está no centro da Terra?";
	$alternativa[4][0] = "1. MANTO";
	$alternativa[4][1] = "2. NÚCLEO";
	$alternativa[4][2] = "3. HIDROSFERA";
	$alternativa[4][3] = "4. LITOSFERA";
	$certa[4] = 1;

	function carregaPergunta($id){
		global $enunciado;
		global $alternativa;
		echo "<h3>".$enunciado[$id]."</h3>";
		for($i=0;$i<4;$i++){
			echo "<p>".$alternativa[$id][$i]."</p>";
		}
		echo "<br>";
	}
?>