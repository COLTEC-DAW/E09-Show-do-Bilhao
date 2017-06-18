<?php
	require 'classes.php';
	function mostraPergunta($id){
		$str = file_get_contents('C:\xampp\htdocs\perguntas.json');
		$json = json_decode($str, true);

		$enunciado = $json[$id]['enunciados'];
		$alternativas = $json[$id]['alternativas'];
		$resposta = $json[$id]['alternativas'];

		//uso de objeto (apesar de desnecessário, da maneira que o código foi feito)
		$pergunta = new Question($enunciado,$alternativas,$resposta);

		echo "<h3>" . $pergunta->enunciado . "</h3>";
		echo "<form action='perguntas.php' method='POST'>";

		for($j=0;$j<4;$j++){
			  echo"<input type='radio' name='resposta' value='" . $j . "'>" . $pergunta->alternativas[$j] . "</input>";
				echo "</br>";
		}
		echo "<input type='hidden' name='id' value='" . ($id+1) ."'>";
		echo "<input type='submit' value='submit'/>";
		echo "</form>";
	}
	function checaResposta($id,$resp){
		$str = file_get_contents('C:\xampp\htdocs\perguntas.json');
		$json = json_decode($str, true);
		$resposta = $json[$id-1]['resposta'];

		echo $resposta;
		echo $resp;
		if($resposta[$id-1]==$resp)
			return true;
		else
			return false;
	}
?>