<?php
    session_start();
    ob_start();
?>
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
	<?php

        $questoes = [];
        $perg = fopen('perguntas.json','r');
		$tudo = "";
        while ($line = fgets($perg)) {
            $tudo = $tudo . $line;
        }
        $json = json_decode($tudo, true);

        fclose($perg);

        foreach($json as $jsonPiece){
            $questao = new Question($jsonPiece["enunciado"],$jsonPiece["alternativas"],$jsonPiece["resposta"]);

            array_push($questoes, $questao);
        }

        $id = $_GET["id"];

        if($id == null){
            login();
        } else {
            $login = $_SESSION["login"];

            if($login != null)          
		        carregaPergunta($id);
            else
                login();           
        }
	?>
        <a href="logout.php">Logout</a>

        <?php include "rodape.inc"; ?>
</body>
</html>