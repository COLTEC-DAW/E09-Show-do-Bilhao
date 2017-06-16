<?php
	require 'classes.php';

	$objetos = array();
	$perguntas = array();
	$alternativas = array();
	$respostas = array();

	//Acessa dados das perguntas
	$arquivo = fopen("perguntas.json", 'r');
	$info = "";
	
	//Le o arquivo
	while(!feof($arquivo)) {
		$info .= fgets($arquivo);
	}
	
	//Decodifica JSON
	$infoJSON = json_decode($info);
	
	//Transforma em objetos e armazena nas variaveis
	for($i = 0; $i < count($infoJSON); $i++) {
		//Transforma em objeto
		$objeto = new Question($infoJSON[$i]->enunciado, $infoJSON[$i]->alternativas, $infoJSON[$i]->resposta);
		array_push($objetos, $objeto);
		
		array_push($perguntas, $objeto->enunciado);
		array_push($alternativas, $objeto->alternativas);
		array_push($respostas, $objeto->resposta);
	}
	

	//Funcao Carrega Pergunta
	function carregaPergunta($id) {
		global $objetos;

		return $objetos[$id];
	}
?>