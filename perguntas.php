<?php
session_start();

require_once "class/Question.inc";
require_once "class/User.inc";
require_once "class/utils.inc";

if (!isset($totalPerguntas)) {
    $totalPerguntas = Question::getCountPerguntas();
}

if (!isset($_COOKIE['numeroAcertos'])) {
    setcookie('numeroAcertos', 0);
    $numeroAcertos = 0;
} else {
    $numeroAcertos = $_COOKIE['numeroAcertos'];
}


?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=VT323&display=swap">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/perguntas.css">
    <link rel="stylesheet" href="assets/css/rodape.css">
    <script src="/assets/js/utils.js"></script>
    <title>Show do Bilhão</title>
</head>

<body>
    <!-- Cabeçalho -->
    <div class="header">
        <h1>Show do Bilhão</h1>
        <?php require_once "partials/menu.inc"; ?>
    </div>

    <!-- Barra de Progresso -->
    <div class="progress-bar">
        <div class="progress" style="width: 0;"></div>
    </div>
    <span class="progress-texto"></span>



    <!-- Perguntas -->

    <?php
    if (isset($_GET['questionId'])) {
        // Primeira vez que o usuario abre o site
        setcookie('numeroAcertos', 0);
        $numeroAcertos = 0;

        $questionId = $_GET['questionId'];
        echoPergunta($questionId);

    } elseif (isset($_POST['questionId'])) {
        // Respondeu alguma pergunta
        $questionId = $_POST['questionId'];

        ?>
        <!-- // Atualiza a barra -->
        <script>atualizarBarraProgresso(<?php echo $numeroAcertos . ", " . $totalPerguntas ?>)</script>
        <?php

        if (isset($_POST['alternativa'])) {
            // Checa se o usuario acertou
            if ($_POST['alternativa'] + 1 === Question::carregaPergunta($questionId)->alternativa_correta) {

                $numeroAcertos++;
                setcookie('numeroAcertos', $numeroAcertos);

                ?>
                <!-- // Atualiza a barra -->
                <script>atualizarBarraProgresso(<?php echo $numeroAcertos . ", " . $totalPerguntas ?>)</script>
                <?php

                // Checa se o usuário já realizou todas as questões
                if ($questionId + 1 >= Question::getCountPerguntas()) {
                    gameWin();
                } else {
                    $questionId++;
                    echoPergunta($questionId);
                }
            } else {
                // Se ele errou manda pro game over
                setcookie('numeroAcertos', 0);
                $numeroAcertos = 0;
                gameOver();
            }
        } else {
            echoPergunta($questionId);
        }

    } else {
        // vAGABUNDO
        setcookie('numeroAcertos', 0);
        $questionId = 0;
        echoPergunta($questionId);
    }

    ?>

    <?php require "partials/rodape.inc"; ?>

</body>

</html>