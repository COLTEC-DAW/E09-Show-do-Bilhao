<?php
        $perguntas = [
        "Quantos Grammy's tem a banda paramore?",
        "Quantos Grammy's tem a multipremiada e conceituada artista Melanie Martinez?",
        "Cabelo loiro é sinômimo do que na cultura popular?",
        "Olhos verdes indicam possíveis problemas:",
        "Qual a principal cidade do subúrbio subdesenvolvido de Belo Horizonte?" ];

        $respostas = array(
        array("0", "1", "10", "Não foram indicados"),
        array("10", "0", "13", "Além de seus vários Grammy's, Melanie Martinez também possui em sua estante um Oscar, um Tonny e um Emmy, classificando-a como uma artista que possui um EGOT"),
        array("Inteligência", "Bom gosto", "Felicidade", "Burrice"),
        array("Mentais", "Oftalmológicos", "Cognitivos", "Dermatológicos"),
        array("Gotham City", "Raposos", "Contagem", "Venda Nova")
        );
     
         $respostascorretas = [3,3,3,1,2];
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
