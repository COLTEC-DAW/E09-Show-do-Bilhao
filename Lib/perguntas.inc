<?php

// Responsável por formatar os dados de uma pergunta para exibição
function carregaPergunta($id){
    if($id < 0 || $id > (count($GLOBALS["Perguntas"])-1) || $id == null){
        return "Atributo id inválido. " . $id . " não é acessível nas questões";
    }
    $default_Inicio = "\t\t\t" . '<div id="QOneCard">';
    $default_Fim = "</div>\n";

    $QuestData = $GLOBALS["Perguntas"][$id];

    $aux = GetAction();
    $str = $default_Inicio . $QuestData->Enunciado . "</br>" . "<form action=" . $aux . ' method="post">';
    
    $letras = ["A","B","C","D","E","F","G"];
    for($i=0;$i<5;$i++){
        $str = $str . '<input type="radio" name="Alternativa" value="' . $i . '"></input> ' . $letras[$i] .") " . $QuestData->Alternativas[$i] . "</br>";
    }

    $str = $str . '<input type="submit" value="Enviar">' . "</br>" ."</form>" . "</br>" . $default_Fim;

    return $str;
}
    
?>