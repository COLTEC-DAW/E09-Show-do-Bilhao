<?php

	$valor = $_COOKIE['id'];
	$proximo_id = $valor + 1;

	$resposta = $_COOKIE['resposta'];    //resposta certa
	$resposta_marcada;

	$newlink = "http://localhost/E09-Show-do-Bilhao-master/perguntas.php"."?id=".$proximo_id;


	if(isset($_POST['optradio'])){
	    $resposta_marcada = $_POST['optradio'];
	}

	if($resposta == $resposta_marcada){
		$redirect = $newlink;
		header("location:$redirect");
	}
	else{
		setcookie('pontuacao', $valor);

		$redirect = "http://localhost/E09-Show-do-Bilhao-master/gameover.php";
		header("location:$redirect");
	}
?>