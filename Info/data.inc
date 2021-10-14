<?php

//Perguntas
$Perguntas = [];

$PerguntasAuxiliar = json_decode(file_get_contents("bancoDados\\Perguntas\\Perguntas.json"), true);
foreach($PerguntasAuxiliar as $auxiliar){
    $GLOBALS['Perguntas'][] = new Pergunta($auxiliar['enunciado'], $auxiliar['alternativas'], $auxiliar['correta']);
}

$Valida = true;

// Retorna uma string formatada com todas as perguntas
function todasPerguntas(){
    if(!$GLOBALS["Valida]) return;
    $padrao_Inicio = "\t\t" . '<div class="row">' . "\n";
    $padrao_Fim = "\t\t</div>\n";
    $format = "";

    $contador = 0;
    $auxiliarPerguntas = $GLOBALS["Perguntas];
    foreach ($auxiliarPerguntas as $value){
        if($contador == 0){
            $format = $format . $padrao_Inicio;
        }else if($contador == 3){
            $format = $format . $padrao_Fim;
            $format = $format . $padrao_Inicio;
            $contador = 0;
        }
        $format = $format . $value->formatarCompleto();

        $contador++;
    }

    return $format . $padrao_Fim;
}
?>