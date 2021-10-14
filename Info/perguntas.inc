<?php

function carregaPergunta($id){
    if($id < 0 || $id > (count($GLOBALS["Perguntas"])-1) || $id == null){
        return "Atributo id inválido. " ;
    }
    $default_Inicio = "\t\t\t" . '<div id="QcardTwo">';
    $default_Fim = "</div>\n";

    $PerguntaDados = $GLOBALS["Perguntas][$id];

    $auxiliar = Acao();
    $str = $default_Inicio . $PerguntaDados->Enunciado . "</br>" . "<form action=" . $auxiliar . ' method= "post">';

    $letras = ["A","B","C","D"];
    for($i = 0; $i < 4; $i++){
        $str = $str . '<input type="radio" name="Opcao" value="' . $i . '"></input> ' . $letras[$i] .") " . $PerguntaDados->Alternativas[$i] . "</br>";
    }

    $str = $str . '<input type="submit" value="Enviar">' . "</br>" ."</form>" . "</br>" . $default_Fim;
    
    return $str;
}

?> 