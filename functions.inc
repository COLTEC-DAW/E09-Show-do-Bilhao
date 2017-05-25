<?php
	function carregaPergunta($id){
		echo "<h3>" . $id . " - $perguntas[$id]</h3><br>";
		foreach ($alternativas[--$id] as $index2 => $info2) {
			switch ($index2) {
				case '0': echo "a)";
					break;
				case '1': echo "b)";
					break;
				case '2': echo "c)";
					break;
				case '3': echo "d)";
					break;
			}
			echo " $info2<br>";
		}
		echo "<br>";
	}
?>