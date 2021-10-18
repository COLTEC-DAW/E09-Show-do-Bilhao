<?php

function carregaPergunta($id){
    // verifica se o índice é válido
    if(($id < 0) || ($id > (count($GLOBALS["perguntas"])-1))){
        return -1;
    }
    // obtem a pergunta selecionada dentre as do array perguntas
    $query = $GLOBALS["perguntas"][$id];
    
    // retorna uma string que representa uma pergunta
    return "<div>".$query."</div>";
}
function carregaAlternativas($id){
    // verifica se o índice é válido
    if(($id < 0) || ($id > (count($GLOBALS["alternativas"])-1))){
        return -1;
    }
    $alternatives = $GLOBALS["alternativas"][$id];
    return $alternatives;
}
function getAllQuestion(){
    $game = "<div>";
    // Informa todos os válidos ids para função carregaPergunta
    for($i = 0; $i < count($GLOBALS["perguntas"]); $i++ ){
        $game = $game."<br>".carregaPergunta($i)."<br>";
        $alternativas = carregaAlternativas($i);
        foreach($alternativas as $alternativa){
            $game = $game.$alternativa."<br>";
        }
    }
    // retorna todas as perguntas
    return $game."</div>";
}
function controleDasQuestoes($questaoAtual){
    // torna o índice um número válido para amostra (sem começar do 0   )
    $questaoAtual++;
    $numeroQuestoes = count($GLOBALS['perguntas']);
    return "[questão: $questaoAtual de $numeroQuestoes]";
}