<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=VT323&display=swap">
    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/perguntas.css">

    <title>Show do Bilhão</title>
</head>

<body>
    <div class="header">
        <h1>Show do Bilhão</h1>
        <?php require_once "partials/menu.inc"; ?>
    </div>

    <!-- Perguntas -->

    <?php
    require_once "class/Question.inc";
    require_once "class/User.inc";
    require_once "class/utils.inc";

    

    if (isset($_GET['questionId'])) {
        // Primeira vez que o usuario abre o site
        $questionId = $_GET['questionId'];
        echoPergunta($questionId);

    } elseif (isset($_POST['questionId'])) {
        // Respondeu alguma pergunta
        $questionId = $_POST['questionId'];
        
        if (isset($_POST['alternativa'])) {
            // Checa se o usuario acertou
            if ($_POST['alternativa'] + 1 === Question::carregaPergunta($questionId)->alternativa_correta) {
                // Checa se o usuário já realizou todas as questões
                if($questionId + 1 >= Question::getCountPerguntas()){
                    gameWin();
                }else{
                    $questionId++;
                    echoPergunta($questionId);
                }
            } else {
                // Se ele errou manda pro game over
                gameOver();
            }
        }else{
            echoPergunta($questionId);
        }

    } else {
        // vAGABUNDO
        $questionId = 0;
        echoPergunta($questionId);
    }

    ?>
</body>

</html>