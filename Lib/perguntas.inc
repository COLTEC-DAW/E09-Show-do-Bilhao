<?php

function carregaPergunta($id){
    if($id < 0 || $id > (count($GLOBALS["Quests"])-1) || $id == null){
        return "Atributo id inválido. " . $id . " não é acessível no banco de dados";
    }
    $default_Inicio = "\t\t\t" . '<div id="QOneCard">';
    $default_Fim = "</div>\n";

    $str = $default_Inicio . $GLOBALS["Quests"][$id] . "</br>";
    
    $letras = ["A","B","C","D","E","F","G"];
    for($i=0;$i<5;$i++){
        $str = $str . '<input type="radio" name="options" value="' . $i . '"></input> ' . $letras[$i] .") " . $GLOBALS["Alternativas"][$id][$i] . "</br>";
    }

    $str = $str . "</br></br>" . $default_Fim;

    return $str;
}
    
?>