<?php
    $perguntas= ["quest1","quest2","quest3","quest4","quest5"];
    $respostas=["1","4","3","2","1"];

    $perg1=["resp1","resp2","resp3","resp4"];
    $perg2=["resp1","resp2","resp3","resp4"];
    $perg3=["resp1","resp2","resp3","resp4"];
    $perg4=["resp1","resp2","resp3","resp4"];
    $perg5=["resp1","resp2","resp3","resp4"];
    $alternativas=[$perg1, $perg2, $perg3, $perg4, $perg5];


    function carregaPergunta($id){
        global $perguntas;
        global $alternativas;
        global $respostas;
        $id--;
        $resp_usuario = $_POST["pergunta"];
        
        echo "<div class='form'>";
        echo "<h2> $perguntas[$id] </h2>";
        echo "<form action='index.php?id=$id' method='POST'>";
        for($i=1;$i<=4;$i++){
            $alternativa = $alternativas[$id][$i-1];
            echo "<div class='pergunta'>";
            echo "<label> <input type='radio' name='pergunta' value='$i'> $alternativa </label>";
            echo "</div>";
        }
        echo "<input class='pergunta' type='submit' name='resp'>";

        echo "usuario" + $resp_usuario;
        echo "resp" + $respostas[$id];
        if($resp_usuario == $respostas[$id]){
            return $id+2;
        } else{
            return 6;
        } 
    }

?>