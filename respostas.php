<?php
	//Variaveis
	$idPergunta = $_POST["id"];
	$idResposta = $_POST["alternativa"];
	$dados = carregaPergunta($idPergunta);
	$resposta = $dados[2];

	//Se tiver acertado a resposta
	if($idResposta == $resposta) {
		//Se ganhou o jogo, redireciona e reseta cookie
		if($idPergunta == 4) {
			setcookie("id");
			header("Location: vitoria.php");
			exit();
		}

		//Exibe proxima pergunta
		setcookie("id", $idPergunta + 1);
		header("Location: index.php");
	} else {
		//Redireciona para Game Over e zera cookie
		setcookie("id");
		header("Location: gameover.php");
		exit();
	}
?>