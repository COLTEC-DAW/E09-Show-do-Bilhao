<?php ob_start();?>
<meta charset="utf-8">
<?php
    $pergunta = $_POST["pergunta"];
    $alternativa = $_POST["alternativa"];
    $resposta = $_POST["resposta"];
    if($alternativa == $resposta){
        $pergunta++;
        setcookie("pergunta", $pergunta);
        header("location: perguntas.php");
    }
    else{
        $certa = $_COOKIE["pergunta"];
        date_default_timezone_set('America/Sao_Paulo');
        setcookie("tentativa", date("d/m/Y - H:i:s"));
        setcookie("pontos", $certa);
        setcookie("pergunta", null);

        echo "<h3>Alternativa Errada</h3>";
        echo "<form action=\"gameover.php\" method=\"POST\">";
        echo "<input type=\"submit\" value=\"Prosseguir\">";
        echo "</form>";
    }
?>