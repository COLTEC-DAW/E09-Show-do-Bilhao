<?php
	function carregaPergunta($id){
		global $perguntas, $alternativas;
		$i=0;
		echo "<h3>" . ++$id . " - " . $perguntas[--$id] . "</h3><br>";
?>
		<form action="checaresposta.php" method="GET">
<?php
		foreach ($alternativas[$id] as $index2 => $info2) {
?>
			<input type="radio" name="resposta" value="$id">)
<?php
			echo " " . $info2 . "<br>";
			$i++;
		}
?>
		<br><input type="submit" name="enviar">
		</form>
<?php
		echo "<br><br><br>";
	}
?>