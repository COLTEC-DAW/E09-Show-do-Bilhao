<?php
    function carregaPergunta($id, $enunciados, $alternativas, $acertos, $gabarito){
        $max = sizeof($enunciados);
        
        if($id == 0){
            $acertos=0;
            header("Location: http://localhost:8050/perguntas.php?id=1");
            die();

            return 200;
        } else if($id <= $max){
            echo "<h4> {$enunciados[$id-1]} </h4>";
            
            echo '<form action="perguntas.php?id='; echo $id+1; echo'" method="post">';
            echo '<input type="radio" name="resposta" required>1. '; echo $alternativas[$id][0]; echo ' <br>';
            echo '<input type="radio" name="resposta">2. '; echo $alternativas[$id][1]; echo ' <br>';
            echo '<input type="radio" name="resposta">3. '; echo $alternativas[$id][2]; echo ' <br>';
            echo '<input type="radio" name="resposta">4. '; echo $alternativas[$id][3]; echo ' <br>';
            echo '<br> <input type="submit" value="Enviar">';
            echo '</form>';

            if($_POST['resposta'] == $gabarito[$id-1]) $_POST[$acertos]++;
            return 200;
        } else {
            echo "<h1> 400 - Bad Request </h1>";
            echo "<h4> Valor de ID maior que o esperado. Altere o campo e tente novamente.</h4>";
            return 400;
        }
    }
?>