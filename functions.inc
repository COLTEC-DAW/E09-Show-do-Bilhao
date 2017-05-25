<?php
    function carregaPergunta($id){
        global $perguntas;
        global $respostas;

            $temp = $id + 1;
			echo "<h2>$temp - " . $perguntas[$id] . "<br></h2>";
			foreach ($respostas[$id] as $info2) {
				echo "$info2<br>";
			}
			echo "<br>";
    }

?>