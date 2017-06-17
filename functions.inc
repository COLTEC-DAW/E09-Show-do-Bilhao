<?php
    function carregaPergunta($id){
        require 'dados.inc';
        if($id <= 4){
            $id_novo = $id+1;
            $alter = $alternativas[$id];
            echo "<h3>$id_novo) $perguntas[$id]</h3>";
            echo "<form action=\"checagem.php\" method=\"POST\">";
            echo "<input type=\"hidden\" name=\"pergunta\" value=\"$id\">";
            for($j = 0; $j < 4; $j++){
                echo "<input type=\"radio\" name=\"alternativa\" value=\"$j\">$alter[$j]</br>";
            }
            echo "<input type=\"submit\" value=\"Enviar\">";
        }
        else{
            header("location: final.php");
        }
    }
?>