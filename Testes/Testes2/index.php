<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <h1> Vamos começar!! </h1>

    <form action="jogo.php" method="get">
        <input type="hidden" name="id" value="0">
        <input type="submit" value="Start">
    </form>

</body>
</html>


<?php
/*
    $arqJSON = file_get_contents("perguntas.json");
    $perguntas = json_decode($arqJSON);

    foreach ($perguntas as $key => $value) {
        echo "Enunciado - " . $perguntas[$key]->enunciado . "<br><br>";
        foreach ($perguntas[$key]->alternativas as $key2 => $value2) {
            echo $value2 . "<br>";
        }
        echo "<br>";
        echo $perguntas[$key]->resposta . "<br><br>";
    }
*/
?>