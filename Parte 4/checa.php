<?php

	$id_da_pergunta = $_POST['ids'];
	$proximo_id = $id_da_pergunta + 1;

	$resposta = $_COOKIE['resposta'];    //resposta certa
	$resposta_marcada;

	$newlink = "perguntas.php"."?id=".$proximo_id;


	if(isset($_POST['optradio'])){
	    $resposta_marcada = $_POST['optradio'];
	}

	if($resposta == $resposta_marcada){
		$redirect = $newlink;
		header("location:$redirect");
	}
	else{
		setcookie('pontuacao', $id_da_pergunta);

		$redirect = "gameover.php";
		header("location:$redirect");
	}
?>