<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Show do Bilhão</title>
</head>
<body>
	<h1>Show do Bilhão!</h1>

	<?php
		$enunciados[0] = 'De quantos anos é constituído um século?';
		$alternativas[0][0] = '50';
		$alternativas[0][1] = '100';
		$alternativas[0][2] = '1000';
		$alternativas[0][3] = '1500';
		$resposta[0] = 1;

		$enunciados[1] = 'Qual é o coletivo de cães?';
		$alternativas[1][0] = 'MATILHA';
		$alternativas[1][1] = 'REBANHO';
		$alternativas[1][2] = 'CARDUME';
		$alternativas[1][3] = 'MANADA';
		$resposta[1] = 0;

		$enunciados[2] = 'Quantas cores compõem o arco-íris?';
		$alternativas[2][0] = '3';
		$alternativas[2][1] = '7';
		$alternativas[2][2] = '12';
		$alternativas[2][3] = '22';
		$resposta[2] = 1;

		$enunciados[3] = 'Em qual parte do corpo humano são implantadas as pontes de safena?';
		$alternativas[3][0] = 'ESTÔMAGO';
		$alternativas[3][1] = 'INTESTINO';
		$alternativas[3][2] = 'PULMÃO';
		$alternativas[3][3] = 'CORAÇÃO';
		$resposta[3] = 3;

		$enunciados[4] = 'O que Rapunzel jogava pela janela?';
		$alternativas[4][0] = 'PERNA';
		$alternativas[4][1] = 'BRAÇO';
		$alternativas[4][2] = 'BRAÇO';
		$alternativas[4][3] = 'TRANÇA';
		$resposta[4] = 3;

		echo '</br>';

		for($i=0;$i<count($enunciados);$i++){
  			echo "<h3>" . $enunciados[$i] . "</h3>";
  			echo "<ol>";
  			for($j=0;$j<4;$j++)
  				echo "<li>" . $alternativas[$i][$j] . "</li>";
  			echo "</ol>";
		}
	?>
	<a href="http://static.recantodasletras.com.br/arquivos/4134577.pdf">Perguntas retiradas deste site.</a>
</body>
</html>