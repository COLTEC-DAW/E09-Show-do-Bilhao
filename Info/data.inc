<?php

//Perguntas
$Perguntas = [
    "Qual é o nome do martelo de Thor?",
    "Qual é a raça alienígena que Loki envia para invadir a Terra em Os Vingadores?",
    "Qual nome falso Natasha Romanoff utiliza quando conhece Tony Stark?",
    "Que tipo de médico é Stephen Strange?",
    "Sobre que cidade Hawkeye e Black Widow costumam relembrar?"
];

//Opções 
$Opcoes = [
    ["Vanir", "Mjolnir", "Aesir", "Norn"],
    ["Skrulls","Chitauri", "Kree", "Flerkens"],
    ["Natalie Rushman", "Natalia Romanoff", "Nicole Rohan", "Naya Rabe"],
    ["Cirurgião cardiotorácico", "Cirurgião de trauma", "Cirurgião plástico","Neurocirurgião"],
    ["Praga", "Istambul", "Budapeste", "Sokovia"]
];

//Respostas certas
$IndiceCorreta = [1,1,0,3,2];

// Retorna a string formatada com a pergunta.
function perguntaCompleta($index){
    $padrao_Inicio = "\t\t\t" . '<div class="Qcard col-4">';
    $padrao_Fim = "</div>\n";

    $str = $padrao_Inicio . $GLOBALS["Perguntas"][$index] . "</br>";

    $letras = ["A","B","C","D"];
    for($i = 0; $i < 4; $i++){
        $str = $str . $letras[$i] .") " . $GLOBALS["Opcoes"][$index][$i] . "</br>";
    }

    $str = $str . "Opção certa: " . $letras[$GLOBALS["IndiceCorreta"][$index]] . ") " . $GLOBALS["Opcoes"][$index][$GLOBALS["IndiceCorreta"][$index]] . "</br></br>" . $padrao_Fim;

    return $str;
}

// Retorna uma string formatada com todas as perguntas
function todasPerguntas(){
    $padrao_Inicio = "\t\t" . '<div class="row">' . "\n";
    $padrao_Fim = "\t\t</div>\n";
    $format = "";

    $auxiliar = 0;
    foreach ($GLOBALS["Perguntas"] as $key => $value){
        if($auxiliar == 0){
            $format = $format . $padrao_Inicio;
        }else if($auxiliar == 3){
            $format = $format . $padrao_Fim;
            $format = $format . $padrao_Inicio;
            $auxiliar = 0;
        }
        $format = $format . perguntaCompleta($key);

        $auxiliar++;
    }

    return $format . $padrao_Fim;
}
?>