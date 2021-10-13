<?php

function carregaPergunta($id){
    if($id < 0 || $id > (count($GLOBALS["Perguntas"])-1) || $id == null){
        return "Atributo id inválido. " ;
    }
    $default_Inicio = "\t\t\t" . '<div id="QcardTwo">';
    $default_Fim = "</div>\n";

    $auxiliar = Acao();
    $str = $default_Inicio . $GLOBALS["Perguntas"][$id] . "</br>" . "<form action=" . $auxiliar . ' method= "post">';

    $letras = ["A","B","C","D"];
    for($i = 0; $i < 4; $i++){
        $str = $str . '<input type="radio" name="Opcao" value="' . $i . '"></input> ' . $letras[$i] .") " . $GLOBALS["Opcoes"][$id][$i] . "</br>";
    }

    $str = $str . '<input type="hidden" id="Pontos" name="Pontos" value=' . $_POST["Pontos"] . "> \n"
        . '<input type="hidden" id="UltimoIndex" name="UltimoIndex" value=' . $_POST["UltimoIndex"] . "> \n"
        . '<input type="hidden" id="Final" name="Final" value=' . $_POST["Final"] . "> \n"
        . '<input type="hidden" id="Sorteados" name="Sorteados" value=' . $_POST["Sorteados"] . "> \n";

    $str = $str . '<input type="submit" value="Enviar">' . "</br>" ."</form>" . "</br>" . $default_Fim;
    
    return $str;
}

?> 