<?php
    include "dados.php";
    $questAtual = htmlspecialchars($_POST['questAtual']);
    $linkDeRetorno = "index.php";
    if(isset($_POST["respostaCorreta"]) && isset($_POST["resposta"])){
        $resposta = htmlspecialchars($_POST["resposta"]);
        $solucao = htmlspecialchars($_POST["respostaCorreta"]);
        $numeroQuest = count($GLOBALS["perguntas"]);
        if($solucao == $resposta){
            if($questAtual >= $numeroQuest){
                echo "[VOCÊ VENCEU O JOGO, PARABÉNS!!]<br><br>";
                echo "[questões acertadas: $questAtual]";
                setcookie('lastPonctuation',$questAtual);
            }else{
                echo "[ACERTOU!!]<br><br>";
                echo "[questões acertadas: $questAtual de $numeroQuest]";
                $linkDeRetorno = "jogo.php";
            }                
        }else{
            $questAtual -= 1;
            echo "[GAME OVER, OTÁRIO!!]<br><br>";              
            echo "[questões acertadas: $questAtual de um total de $numeroQuest]";
            setcookie('lastPonctuation',$questAtual);
        }      
    }
 ?>

<form action="<?php echo $linkDeRetorno?>" method="post">
    <br><br>
    <input type="hidden" name="questAtual" value="<?php echo $questAtual?>">
    <input type="submit" value="Voltar à Tela Inicial">
</form>


