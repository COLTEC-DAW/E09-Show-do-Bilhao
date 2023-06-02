<?php
function carregaPergunta($id){
    global $perguntas;
    global $respostas;
    global $alternativas;

    for($i=1; $i<=5; $i++){
        if($id==$i){
            $return = [$perguntas[$i-1], $respostas[$i-1], $alternativas[$i-1][0], $alternativas[$i-1][1],
            $alternativas[$i-1][2], $alternativas[$i-1][3]];
            return $return;
        } 
    }
}
?>