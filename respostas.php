<?php
	require 'index.php';
	
	//Variaveis
	$idPergunta = $_POST["id"];
	$idResposta = $_POST["alternativa"];
	$dados = carregaPergunta($idPergunta);
	$resposta = $dados[2];

	//Se tiver acertado a resposta
	if($idResposta == $resposta) {
		//Se ganhou o jogo, redireciona e reseta cookies
		if($idPergunta == 4) {
			setcookie("id", 0);
			setcookie("lastScore", $idPergunta + 1);
			setcookie("lastDate", date("d/m/Y h:i:s", time()));

			session_destroy();
			header("Location: vitoria.php");

			exit();
		}

		//Exibe proxima pergunta
		setcookie("id", $idPergunta + 1);
		header("Location: index.php");
	} else {
		//Redireciona para Game Over e zera cookies
		setcookie("id", 0);
		setcookie("lastScore", $idPergunta);
		setcookie("lastDate", date("d/m/Y h:i:s", time()));

		session_destroy();
		header("Location: gameover.php");

		exit();
	}
?>