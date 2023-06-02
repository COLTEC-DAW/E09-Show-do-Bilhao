<?php
    $perguntas= ["Quem é Taylor Swift?","Qual a data de nascimento da cantora?",
    "Onde ela nasceu?","Com quantos anos fez seu primeiro album?",
    "Quantos albuns publicados ela tem?"];
    $respostas=["a", "d","c","b","a"];

    $perg1=["Cantora-Compositora","Cozinheira","Cineasta","Jogadora de vôlei"];
    $perg2=["18/05/1989","15/08/1999","23/06/1999","13/12/1989"];
    $perg3=["Estados Unidos","Canadá","Pensilvania","Inglaterra"];
    $perg4=["19","16","17","15"];
    $perg5=["10","8","7","11"];
    $alternativas=[$perg1, $perg2, $perg3, $perg4, $perg5];

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

    function verificaPergunta($id, $resp_usuario){
        if($id<5 && $resp_usuario == carregaPergunta($id)[1]){
            return $id= $id+1;
        } else{
            return $id=6;
        } 
    }
?>