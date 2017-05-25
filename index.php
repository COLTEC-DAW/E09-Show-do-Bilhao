<!DOCTYPE html>
<html>
<head>
	<title>Show do Bilhão</title>
	<meta charset="utf-8">
</head>
<body>
	<h1 style="text-align: center;color: #7cfc00;text-shadow: 2px 2px darkgreen">$how do Bilhão</h1>
	<?php
    
        $perg = fopen('perguntas.txt','r');
		$perguntas = array();
        while ($line = fgets($perg)) {
            array_push($perguntas, $line);
        }
        fclose($perg);

        $resp = fopen('respostas.txt','r');
		$respostas = array();
        $respostas_unica = array();
        while ($line = fgets($resp)) {
            $i++;
            array_push($respostas_unica, $line);
            if($i == 4){
                $i = 0;
                array_push($respostas, $respostas_unica);
                $respostas_unica = array();
            }
        }
        fclose($resp);

        $gab = fopen('gabarito.txt', 'r');
        $gabarito = array();
        while ($line = fgets($gab)) {
            array_push($gabarito, $gab);
        }
        fclose($gab);

		foreach ($perguntas as $i => $info) {
            $temp = $i +1;
			echo "<h2>$temp - $info<br></h2>";
			foreach ($respostas[$i] as $j => $info2) {
				echo "$info2<br>";
			}
			echo "<br>";
		}
	?>
</body>
</html>