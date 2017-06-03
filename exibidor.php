<?php
	//Funcao de Exibicao
	function exibePergunta($id, $dados) {
		//Pergunta
		echo $id + 1 . ") " . $dados[0] . "<br><br>";
		
		//Alternativas
?>
		<form action="respostas.php" method="post">
			<input type="hidden" name="id" value=<?=$id?>>
<?php				
			for ($j = 0; $j < 5; $j++) {
?>
				<input type="radio" name="alternativa" value=<?=$j?>> <?=$dados[1][$j]?>
				<br>
<?php
			}
?>
			<br>
			<input type="Submit" value="Enviar">
		</form>

		<!--Mostra o indice de acertos do usuario-->
		<p>Pergunta: <?=$id + 1?>/5</p>
<?php 	
	}
?>