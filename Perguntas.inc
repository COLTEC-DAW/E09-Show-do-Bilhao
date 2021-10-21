<?php
/**
* @file   Perguntas.inc
* @brief  Arquivo com o  partial que conterá funções auxiliares que irão manipular as perguntas da página.
* @author Bruna Pérez
* @date   2021-10-05
*/

//uma função que irá acessar o vetor de perguntas, alternativas e respostas, e retornar os dados referentes a pergunta selecionada.
 function carregaPergunta($id){

        if($id > count($GLOBALS["Enunciados"]) || $id < 0 || $id == null){
            return "O Id " . $id . " é inválido ou inexistente";
        }

        $inicio = "<div>";
        
        $pergunta = $inicio . $GLOBALS["Enunciados"][$id] . "<br>";

        $alternativas = ["A", "B", "C", "D"];

        for($i = 0; $i < 4; $i++){
            $pergunta = $pergunta . '<input type="radio" name="options" value="' . $i . '"></input> ' .$alternativas[$i] . ")" . $GLOBALS["Alternativas"][$id][$i] . "</br>";
        }

        return $pergunta;
    }
?> 