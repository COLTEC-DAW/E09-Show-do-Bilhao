<?php
	
	require "dados.inc";

	$novaPergunta = $_POST["pergunta+1"];

	if($_POST["resposta"] == $respostas[$_POST["pergunta"]]){
		header("location: pergunta.php?id=$novaPergunta");
	}
	header("location: gameover.html");
?>