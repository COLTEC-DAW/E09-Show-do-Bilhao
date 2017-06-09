<?php
	require "dados.inc";

	$pergunta = $_POST["pergunta"];
	$resposta = $_POST["resposta"];

	if($resposta == $respostas[$pergunta]){
		$novaPergunta = $pergunta+1;

		if($novaPergunta == 6){
			header("location: win.php");
		}
		elseif($novaPergunta < 6){
			$ultimaPontuacao = $pergunta++;
			setcookie("ultimaPontuacao", $ultimaPontuacao);
			setcookie("perguntaAtual", $novaPergunta);
			header("location: pergunta.php?id=" . $novaPergunta);
		}
	}else{
		header("location: gameover.php");
	}
?>