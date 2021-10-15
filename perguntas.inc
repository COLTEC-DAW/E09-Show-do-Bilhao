<?php

$perguntas = array(
    "Qual o nome do melhor canal da Angola ?",
    "Qual a religião do Sergio ?",
    "Qual minha banda favorita ?",
    "Qual meu professor favorito no coltec ?"
);

$alternativas =  array(
    array("Gabriel Mine", "Rei do Kuduro", "Vsauce", "Buzlaitir"),
    array("Umbanda", "Satanismo", "Evangelicalismo", "Cristianismo"),
    array("Black Sabbath", "Death", "Bee Gees", "Gordão do Pc"),
    array("Talin", "Jemaf", "ZéDu", "LEANDRO MAIA")
);

$respostas = [2,3,1,4];
$indices = ["A: ", "B: ", "C: ", "D: "];

function mostra_perguntas(){
    global $perguntas, $alternativas, $respostas, $indices;
    for($i = 0;$i< count($perguntas);$i++){
        echo ($i + 1) . " $perguntas[$i]\n\n";

        for($j = 0;$j<count($alternativas[$i]);$j++){
            if(($j + 1) == $respostas[$i]){
                echo  "Correta: " . $indices[$j] . $alternativas[$i][$j] . "\n";
            }else{
            echo  $indices[$j] . $alternativas[$i][$j] . "\n";
            }
        }
        echo "\n";
    }
}

function carregaPergunta($id){
    global $perguntas, $alternativas, $respostas, $indices;

    
    if($id > count($perguntas) || $id < 0 || !is_int($id)){
        return 0;
    }else{
        $pergunta = array(
            "pergunta" => $perguntas[$id],
            "alternativas_" => $alternativas[$id],
            "resposta" => $respostas[$id],
        );
        
        return $pergunta;  
    }
}

function mostra_pergunta($pergunta){
    
    $pergunta_ = $pergunta["pergunta"];
    $alternativas = $pergunta["alternativas_"];
    $resposta = $pergunta["resposta"];
    global $indices; 

    echo  $pergunta_ . "\n\n";
    for($i = 0;$i<count($alternativas);$i++){
        if(($i + 1) == $resposta){
            echo "Correta: " . $indices[$i] . $alternativas[$i] . "\n";
        }else{
            echo $indices[$i] . $alternativas[$i] . "\n";
        }
    }
    
}
?>
    