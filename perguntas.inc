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

$respostas = [1,2,0,3];
$indices = ["A: ", "B: ", "C: ", "D: "];

function mostra_pergunta($id){

    global $perguntas, $alternativas, $respostas, $indices;

    $pergunta = array(
        "pergunta" => $perguntas[$id],
        "alternativas" => $alternativas[$id],
        "resposta" => $respostas[$id],
    );  

    echo ("<form action = respostas.php method = 'post' >");
    echo $pergunta["pergunta"] . "<br>";
    for($j = 0;$j<count($pergunta["alternativas"]);$j++){
        echo ("<input type = 'radio' id=". $j ." name = 'forms' value=" .$j. ">
                <label for = ".$j."> ".$pergunta["alternativas"][$j]."</label><br>");
    }
    echo (" <input type = 'hidden' name = 'id' value = ".$id.">
            <input type = 'hidden' name = 'resposta' value = ".$pergunta["resposta"].">
            <input type = 'submit' value='Enviar'>
            </form>");
}

?>
    