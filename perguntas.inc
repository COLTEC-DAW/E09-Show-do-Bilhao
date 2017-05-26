<?php
	$perguntas = array();
	$alternativas = array();
	$respostas = array();

	//Enunciados das perguntas
	$perguntas[0] = "Qual a cor do cavalo branco de Napoleão?";
	$perguntas[1] = "Qual a cor da lagoa do filme 'Lagoa Azul'?";
	$perguntas[2] = "Qual a cor do Michael Jackson antes das cirurgias?";
	$perguntas[3] = "Qual a cor do Michael Jackson depois das cirurgias?";
	$perguntas[4] = "Qual a cor das cadeiras do Lab Verde?";

	//Alternativas
	for($i = 0; $i < 5; $i++) {
		$alternativas[$i] = array();
		$alternativas[$i][0] = "Azul";
		$alternativas[$i][1] = "Verde";
		$alternativas[$i][2] = "Marrom";
		$alternativas[$i][3] = "Preto";
		$alternativas[$i][4] = "Branco";
	}

	//Respostas
	$respostas[0] = 4;
	$respostas[1] = 0;
	$respostas[2] = 2;
	$respostas[3] = 4;
	$respostas[4] = 1;

	//Funcao Carrega Pergunta
	function carregaPergunta($id) {
		global $perguntas;
		global $alternativas;
		global $respostas;

		return array($perguntas[$id], $alternativas[$id], $respostas[$id]);
	}
?>