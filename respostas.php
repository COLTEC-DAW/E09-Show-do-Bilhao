<?php

	$id_da_pergunta = $_POST['ids'];

	$resposta = $_POST['certa'];
	$resposta_marcada;


	if(isset($_POST['optradio']))
	{
	    $resposta_marcada = $_POST['optradio'];
	}

	if($resposta == $resposta_marcada)
	{
		$link='Location: /perguntas.php?id=0';
		$link = str_replace('0',$_POST[ids]+1, $link);
		header($link);
	}
	else
	{
		setcookie('pontuacao', $id_da_pergunta);

		$link='Location:/gameover.php';
		header($link);
	}
?>