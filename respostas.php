<?php

	$pergunta=$_POST[id];
	$alternativa=$_POST[alternativa];

	$respostas[0] = 1;
    $respostas[1] = 1;
    $respostas[2] = 2;
    $respostas[3] = 2;
    $respostas[4] = 3;

	if ($alternativa==$respostas[$pergunta]) {
		$link='Location: /perguntas.php?id=0';
		$link = str_replace('0',$_POST[id]+1, $link);
		header($link);
	}
	else{
		$link='Location:/gameover.php';
		header($link);
	}
 ?>