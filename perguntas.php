<?php
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
	
	//Armazena nas variaveis
	for($i = 0; $i < count($infoJSON); $i++) {
		array_push($perguntas, $infoJSON[$i]->enunciado);
		array_push($alternativas, $infoJSON[$i]->alternativas);
		array_push($respostas, $infoJSON[$i]->resposta);
	}
	

	//Funcao Carrega Pergunta
	function carregaPergunta($id) {
		global $perguntas;
		global $alternativas;
		global $respostas;

		return array($perguntas[$id], $alternativas[$id], $respostas[$id]);
	}
?>