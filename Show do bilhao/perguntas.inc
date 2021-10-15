<?php

    $enunciados = array("Qual a capital da França?", "Quem proclamou a República do Brasil?", "Quais foram as duas cidades japonesas atingidas pela bomba atômica na Segunda Guerra?", "Qual o órgão responsável por eliminar as toxinas resultantes do metabolismo corporal?", "Qual a cidade ucraniana atingida pelo acidente nuclear em 1986?");

    $respostas = array(array("Londres", "Berlim", "Roma", "Paris"),
        array("Jane Calamidade", "Deodoro da Fonseca", "Virgulino Ferreira", "Oliver Cromwell"),
        array("Indochina e Tóquio", "Quioto e Osaka", "Yokohama e Nagoia", "Hiroshima e Nagasaki"),
        array("Fígado", "Intestino", "Rim", "Útero"),
        array("Chernobyl", "Kiev", "Odessa", "Lviv"));

    function carregarPergunta($id = 0) {
        global $enunciados;
        global $respostas;
        $pergunta = $enunciados[$id];
        $alternativas = $respostas[$id];
        echo "$pergunta <br>";
        foreach($alternativas as $valoralternativa) {
            include "armazenaAlternativa.inc";
            echo "$valoralternativa <br>";
        }
    }
    $carregar = $_GET["idPergunta"];
    carregarPergunta($carregar);
?>