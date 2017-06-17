<?php
    require 'dados.inc';
    $pergunta = $_POST["pergunta"];
    $resposta = $_POST["alternativa"];
    if($resposta == $respostas[$pergunta]){
        $pergunta++;
        setcookie("pergunta", $pergunta);
        header("location: perguntas.php");
    }
    else{
        echo "<h3>Alternativa Errada</h3>";
        echo "<form action=\"gameover.php\" method=\"POST\">";
        echo "<input type=\"submit\" value=\"Prosseguir\">";
        echo "</form>";
    }
?>