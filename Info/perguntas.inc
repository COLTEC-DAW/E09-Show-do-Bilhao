<?php

function carregaPergunta($id){
    if($id < 0 || $id > (count($GLOBALS["Perguntas"])-1) || $id == null){
        return "Atributo id inválido. " ;
    }
    $default_Inicio = "\t\t\t" . '<div id="QcardTwo">';
    $default_Fim = "</div>\n";

    $str = $default_Inicio . $GLOBALS["Perguntas"][$id] . "</br>";

    $letras = ["A","B","C","D"];
    for($i = 0; $i < 4; $i++){
        $str = $str . '<input type="radio" name="options" value="' . $i . '"></input> ' . $letras[$i] .") " . $GLOBALS["Opcoes"][$id][$i] . "</br>";
    }

    $str = $str . "</br></br>" . $default_Fim;

    return $str;
}

?> 