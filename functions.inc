<?php
	function carregaPergunta($id){
		global $perguntas, $alternativas;
		$i = 0;
		echo "<h3>" . ++$id . " - " . $perguntas[--$id] . "</h3><br>";
?>
		<form action="checaResposta.php" method="POST">
	<?php
			echo "<input type=\"hidden\" name=\"pergunta\" value=\"$id\">";
		foreach ($alternativas[$id] as $index2 => $info2) {

			echo "<input type=\"radio\" name=\"resposta\" value=\"$i\">)";

			echo " " . $info2 . "<br>";
			$i++;
		}
?>
		<br><input type="submit" name="enviar">
		</form>
<?php
		echo "<br><br><br><p>" . $id . "/6 perguntas acertadas";
	}
?>

