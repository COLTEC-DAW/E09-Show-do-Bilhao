<?php
require "enunciado.php";
/**
 *  Recebe um id e retorna a pergunta correspondente
 * */
function carregaPergunta($id){
    // verifica se o índice é válido
    if(($id < 0) || ($id > (count($GLOBALS["perguntas"])-1))){
        return -1;
    }
    // obtem a pergunta selecionada dentre as do array perguntas
    $query = $GLOBALS["perguntas"][$id]."<br>";
    // passa por todas as alternativas dessa pergunta e concatena com a pergunta
    for($i = 0; $i < 4; $i++ ){
        $query = $query.$GLOBALS["alternativas"][$id][$i]."<br>";
    }
    // retorna uma string que representa uma pergunta
    return "<div>".$query."</div>";
}
/**
 *  Faz uso da função carregaPergunta para imprimir todas as perguntas
 */
function getAllQuestion(){
    $game = "<div>";
    // Informa todos os válidos ids paraa função carregaPergunta
    for($i = 0; $i < count($GLOBALS["perguntas"]); $i++ ){
        $game = $game.carregaPergunta($i)."<br>";
    }
    // retorna todas as perguntas
    return $game."</div>";
}


