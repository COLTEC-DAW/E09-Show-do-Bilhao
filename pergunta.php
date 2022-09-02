<?php 
    require("perguntas.class.php");
    require("register.class.php");
    $question_id = 0;

    $question = new Questions;
    $pergunta = $question->load_question($question_id);
    // associamos o método que carrega a questão à variável pergunta
    $alternativas = $question->load_option($question_id);
    // associamos o método que carrega a alternativa à variável alternativas
    $resposta = $question->load_answer($question_id);
    // associamos o método que carrega a resposta à variável respostas

    if (isset($_GET["id"])) {
        $question_id = $_GET["id"];
    }
    // recebemos a id da página

    $previous_answer = "";
    $previous_option_selected = "";

    if (isset($_POST["answer"])) {
        $previous_answer = $_POST["answer"];
        $previous_option_selected = $_POST["option"];
    }
    // recebemos a resposta correta e a alternativa inserida pelo usuário
    
    if ($previous_answer != $previous_option_selected) {
        header("Location: GameOver.php");
        exit();
    }
    // comparamos ambas e se não coincidirem, o jogador perde

    if ($question_id == 5 && $previous_answer == $previous_option_selected) {
        header("Location: Ganhou.php");
        exit();
    }
    // se a última resposta for inserida corretamente, o jogo foi ganho

    $question = new Questions;
    $pergunta = $question->load_question($question_id);
    $alternativas = $question->load_option($question_id);
    $resposta = $question->load_answer($question_id);
    // recebemos os valores da próxima questão
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
    <title>Questões</title>
    </head>
    <body>
        <h1> <?php include('menu.inc') ?> </h1>
        
        <h2><?= $pergunta ?></h2> 
        <form action="pergunta.php?id=<?= $question_id + 1 ?>" method="post">
            <input type="radio" name="option" value="0" id="" required>
            <label for="0"><?= $alternativas[0] ?></label> <br>
            <input type="radio" name="option" value="1" id="" required>
            <label for="1"><?= $alternativas[1] ?></label> <br>
            <input type="radio" name="option" value="2" id="" required>
            <label for="2"><?= $alternativas[2] ?></label> <br>
            <input type="radio" name="option" value="3" id="" required>
            <label for="3"><?= $alternativas[3] ?></label> <br><br>
            <input type="hidden" name="answer" value="<?= $resposta ?>">
            <input type="submit" value="Enviar">
        </form>
        <br>
        <h4> 
          <?php 
            $numero_pagina = $_GET['id'];
            echo "Você está na questão: ".$numero_pagina+1 . "/5";
          ?> 
        </h4>
    
    </body>
</html>