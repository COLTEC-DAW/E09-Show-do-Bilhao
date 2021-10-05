<?php

    function GetPergunta($id){

        if($id > count($GLOBALS["perguntas"]) || $id < 0){
            return "O Id" . $id . "é inválido ou inexistente";
        }

        $inicio = "<div>";
        $fim = "</div>";

        $questao = $inicio . $GLOBALS["perguntas"][$id] . "<br>";

        $opcoes = ["A", "B", "C", "D", "E"];

        for($i = 0; $i < 5; $i++){
            $questao = $questao . '<input type="radio" name="options" value="' . $i . '"></input> ' .$opcoes[$i] . ")" . $GLOBALS["opcoes"][$id][$i] . "<br>";
        }

        return $questao;
    }
?>