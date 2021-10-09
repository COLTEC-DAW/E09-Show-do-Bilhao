<?php 

// Dados das perguntas
$Perguntas = [];

// Carrega os dados presentes nos arquivos JSON.
$PerguntasAUX = json_decode(file_get_contents("DataBase\\Perguntas\\Quests.json"), true);
foreach($PerguntasAUX as $aux){
    $GLOBALS['Perguntas'][] = new Question($aux['enunciado'],$aux['alternativas'],$aux['resposta']);
}

// Permite a exibição de todas as perguntas.
$Validate = true;

// Retorna uma string formatada com todas as perguntas
function ShowAllQuests(){
    if(!$GLOBALS["Validate"]) return;
    $default_Inicio = "\t\t" . '<div class="row">' . "\n";
    $default_Fim = "\t\t</div>\n";
    $format = "";

    $AuxIndex = 0;
    $QuestsAux = $GLOBALS["Perguntas"];
    foreach ($QuestsAux as $value){
        if($AuxIndex == 0){
            $format = $format . $default_Inicio;
        }else if($AuxIndex == 3){
            $format = $format . $default_Fim;
            $format = $format . $default_Inicio;
            $AuxIndex = 0;
        }
        $format = $format . $value->FormatCompleto();

        $AuxIndex++;
    }

    return $format . $default_Fim;
}

?>