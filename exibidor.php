<?php
	//Funcao de Exibicao
	function exibePergunta($id, $dados) {
		//Pergunta
		echo $id + 1 . ") " . $dados->enunciado . "<br><br>";
		
		//Alternativas
?>
		<form action="respostas.php" method="post">
			<input type="hidden" name="id" value=<?=$id?>>
<?php				
			for ($j = 0; $j < 5; $j++) {
?>
				<input type="radio" name="alternativa" value=<?=$j?>> <?=$dados->alternativas[$j]?>
				<br>
<?php
			}
?>
			<br>
			<input type="Submit" value="Enviar">
		</form>
		<br>

		<!--Logout-->
		<a href="/login.php"><button>Sair</button></a>

		<!--Mostra o indice de acertos do usuario-->
		<p>Pergunta: <?=$id + 1?>/5</p>
		<!--Last Score-->
		<p>Last Score: <?=$_COOKIE["lastScore"]?></p>
		<!--Last Score-->
		<p>Last Time you Played: <?=$_COOKIE["lastDate"]?></p>
<?php 	
	}
?>