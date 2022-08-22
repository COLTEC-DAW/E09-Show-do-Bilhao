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
        
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width-device-width, incial-scale=1.0">
        <title>Show do Bilhão</title>
    </head>
    <body>
        <h1>Olá, player!!! Bem-vindo ao Show do Bilhao, sua oportunidade de virar o próximo Elon Musk.</h1>
        <p>
         <?php
         
             foreach ($perguntas as $chave => $enunciado) {
                echo "<li>";
                    echo "<strong>{$enunciado}</strong>";
                    echo "<ol type = 'A'>";
                        foreach ($respostas[$keys[$chave]] as $alternativa) {
                            echo "<li>$alternativa</li>";
                        }
                    echo "</ol>";
                echo "</li>";
            }
           
         ?>
        </p>

        <input type="submit" value="Resultado">
    </body>
</html>
