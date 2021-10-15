<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Milhão</title>
    
    <?php      
        include "menu.inc";
        include "rodape.inc";
    ?>
</head>
<body>
    
    <!-- Menu -->
    <?php   
        echo menu(
                "<a href='index.php'>Home</a>",
                "<a href='provaDeConceito.php'>Prova de Conceito</a>"
                );
    ?>
    
    <!-- Descrição do Jogo -->
    <p>O Show do Bilhão é um programa idealizado pela emissora SBT (Sistema Belo-Horizontino de Televisão).<br> 
        Neste programa, um candidato escolhido da audiência é submetido a uma sequência de 5 perguntas de <br> 
        conhecimento geral. A medida em que o candidato responde cada pergunta ele avança no jogo. </p>
    <p>O jogo termina quando o candidato responde uma pergunta incorretamente. Após o término do jogo o sistema <br>
        calcula a pontuação final do candidato. Sua pontuação é dada pela quantidade de perguntas respondidas <br>
        corretamente pelo candidato.</p>
    
    <!-- Formulário para seleção de questão -->
    <form action="questao.php" method="get" name="QuestionID">
        Índice da questão desejada: 
        <input type="text" name="id">
        <input type="submit" value="Enviar">
    </form>
    
    <!-- Rodapé -->
    <?php 
        echo rodape("Developed by ",
            "O incrível",
            "O inigualável",
            "O magnânimo",
            "O inexorável",
            "O estupendo",
            "IAGO!!!");
    ?>
</body>
</html>




