<?php

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

?>