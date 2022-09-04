
<?php
        $perguntas = [
        "As árvores que não perdem suas folhas no outono, são também chamadas de:",
        "Qual desses ingredientes não é usado no preparo do pavê?",
        "O que é um Cartoon",
        "Quem nasce no Estado do Rio de Janeiro é:" ];
        $respostas = array(
         array("Viçosas","Floridas","Sempre-Verdes","Nativas"),
         array("Bolacha", "Manteiga", "Gemas", "Pimenta"),
         array("Desenho Animado", "Livro Antigo", "Livro de Receitas", "Carta Geográfica"),
         array("Fluminense", "Paulistano", "Sergipano", "Gaúcho"));
     
         $respostascorretas = [2,3,0,0];
         $keys = array_keys($respostas);
        
         function CarregaPerguntas($id){
        global $perguntas, $respostas, $respostascorretas;
        $string = "resposta";
        echo $perguntas[$id]."<br><br>";
        echo ("<from action = 'http://localhost/O-Show-Do-Bilhao/ChecandoRespostas.php' method = 'post'>
         <input type = 'checkbox' id='pergunta0' name = ".$string." value = 0>
                <label for = 'pergunta0'> ".$respostas[$id][0]."</label><br>
                <input type = 'checkbox' id='pergunta1' name = ".$string." value = 1>
                <label for = 'pergunta1'> ".$respostas[$id][1]."</label><br>
                <input type = 'checkbox' id='pergunta2' name = ".$string." value = 2>
                <label for = 'pergunta2'> ".$respostas[$id][2]."</label><br>
                <input type = 'checkbox' id='pergunta3' name = ".$string." value = 3>
                <label for = 'pergunta3'> ".$respostas[$id][3]."</label><br><br>
                //<input type = 'image' src = 'http://localhost/DAW-E09/Imagens/submitButtom.png' alt='Submit' style = 'max-widht:32px; max-height:32px;'>
                <input type = 'hidden' id = 'qualPergunta' name = 'pergunta' value = ".$id.">
                <input type = 'hidden' id = 'respostaCorreta' name = 'respostaCorreta' value = ".$respostascorretas[$id].">
                </form>");
        }
?>
