<?php

function carregaPergunta($id){
    if($id < 0 || $id > (count($GLOBALS["Quests"])-1) || $id == null){
        return "Atributo id inválido. " . $id . " não é acessível nas questões";
    }
    $default_Inicio = "\t\t\t" . '<div id="QOneCard">';
    $default_Fim = "</div>\n";

    $aux = GetAction();
    $str = $default_Inicio . $GLOBALS["Quests"][$id] . "</br>" . "<form action=" . $aux . ' method="post">';
    
    $letras = ["A","B","C","D","E","F","G"];
    for($i=0;$i<5;$i++){
        $str = $str . '<input type="radio" name="Alternativa" value="' . $i . '"></input> ' . $letras[$i] .") " . $GLOBALS["Alternativas"][$id][$i] . "</br>";
    }
    $str = $str . '<input type="hidden" id="Pontos" name="Pontos" value=' . $_POST["Pontos"] . "> \n"
        . '<input type="hidden" id="LastIndex" name="LastIndex" value=' . $_POST["LastIndex"] . "> \n"
        . '<input type="hidden" id="FinalP" name="FinalP" value=' . $_POST["FinalP"] . "> \n"
        . '<input type="hidden" id="JaSorteados" name="JaSorteados" value=' . $_POST["JaSorteados"] . "> \n";

    $str = $str . '<input type="submit" value="Enviar">' . "</br>" ."</form>" . "</br>" . $default_Fim;

    return $str;
}
    
?>