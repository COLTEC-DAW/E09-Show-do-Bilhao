<?php
    $perguntas= ["quest1","quest2",
    "quest3","quest4",
    "quest5"];
    $respostas=["a", "d","c","b","a"];

    $perg1=["resp1","resp2","resp3","resp4"];
    $perg2=["resp1","resp2","resp3","resp4"];
    $perg3=["resp1","resp2","resp3","resp4"];
    $perg4=["resp1","resp2","resp3","resp4"];
    $perg5=["resp1","resp2","resp3","resp4"];
    $alternativas=[$perg1, $perg2, $perg3, $perg4, $perg5];


    function carregaPergunta($id){
        global $perguntas;
        global $alternativas;
        $id--;
        echo "<div class='form'>";
        echo "<h2> $perguntas[$id] </h2>";
        echo "<form action='index.php?id=$id' class='pergunta' method='POST'>";
        for($i=0;$i<=3;$i++){
            $alternativa = $alternativas[$id][$i];
            echo "<div class='pergunta'>";
            echo "<label> <input type='radio' name='pergunta' value='a'> $alternativa </label>";
            echo "</div>";
        }
        echo "<input class='pergunta' type='submit' name='resp'>";

        
    }

    function verificaPergunta($id, $resp_usuario){
        global $respostas;
        $i=$id--;
        if($id<5 && $resp_usuario == $respostas[$i]){
            return $id= $id+1;
        } else{
            return $id=6;
        } 
    }
?>