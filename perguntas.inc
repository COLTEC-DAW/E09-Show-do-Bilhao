<?php
    
    function carregaPergunta($id){
        global $enunciados;
        global $alternativas; 
        global $certa;
        global $pontuacao;
        $pontuacao = $id;
            echo "<p>Questao:  " .  $enunciados[$id] . " </p>";
            echo "<form action='/ConfereResposta.php' method='post'>"; 
            echo "<input type='hidden' name='resp' value='$certa[$id]'>";
            echo "<input type='hidden' name='ident' value='$id'>";
            for($i=0;$i<4;$i++){
                echo "<input type='radio' name='alter' value='$i'>"  . $alternativas[$id][$i]; 
                echo "<br>";
            }
            echo "<input type='submit' value='Submit'>";
            echo "<br>";
            echo "<input type='hidden' name='points' value'$pontuacao'>";
            echo "<p> Pontuacao:" . $pontuacao . "</p>"; 
            echo "</form>";
    }
?>