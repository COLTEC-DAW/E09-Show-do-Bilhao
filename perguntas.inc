<?php
    $perguntas = [
        "Leonardo DiCaprio ganhou o Oscar por qual de seus filmes?",
        "Quando é o outono do hemisfério norte?",
        "Qual é a cor das famosas cabines telefônicas de Londres?",
        "Nos contos de fadas, qual animal que, quando é beijado, vira um príncipe?" ];
    $respostas = array(
        array("Titanic","O Lobo de Wall Street","O Grande Gatsby","O Regresso"),
        array("De janeiro a abril", "De abril a julho", "De julho a setembro", "De setembro a dezembro"),
        array("Verde", "Vermelho", "Azul", "Amarelo"),
        array("Cavalo", "Rato", "Sapo", "Sua mãe"));

    $respostascorretas = [3,3,1,2];
    $keys = array_keys($respostas);

function carregaPergunta($id){
      global $perguntas, $respostas, $respostascorretas;
      $string = "resposta";
      echo $perguntas[$id]."<br><br>";
      $increment = 0;
      echo ("<form action ='http://localhost/O-Show-do-Bilhao/confereRespostas.php' method = 'post' >
                <input type = 'checkbox' id='pergunta0' name = ".$string." value = 0>
                <label for = 'pergunta0'> ".$respostas[$id][0]."</label><br>
                <input type = 'checkbox' id='pergunta1' name = ".$string." value = 1>
                <label for = 'pergunta1'> ".$respostas[$id][1]."</label><br>
                <input type = 'checkbox' id='pergunta2' name = ".$string." value = 2>
                <label for = 'pergunta2'> ".$respostas[$id][2]."</label><br>
                <input type = 'checkbox' id='pergunta3' name = ".$string." value = 3>
                <label for = 'pergunta3'> ".$respostas[$id][3]."</label><br><br>
                <input type = 'submit' name = 'Enviar' >
                <input type = 'hidden' id = 'qualPergunta' name = 'pergunta' value = ".$id.">
                <input type = 'hidden' id = 'respostascorretas' name = 'respostascorretas' value = ".$respostascorretas[$id].">
            </form>");
}
        echo "<br>";

?> 
