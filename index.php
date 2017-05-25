<!DOCTYPE html>
<html>
<?php require "functions.inc"; ?>
<head>
	<title>Show do Bilhão</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<meta charset="utf-8">
</head>
<body>
    <?php include "menu.inc";?>

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

		carregaPergunta($_GET["id"]);
	?>

        <?php include "rodape.inc"; ?>
</body>
</html>