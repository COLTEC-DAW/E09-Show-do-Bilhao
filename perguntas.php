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
        <?php require "partials/menu.inc"; ?>
    </div>

    <!-- Perguntas -->

    <?php
    require "class/Question.inc";
    require "class/User.inc";

    $questionId = isset($_GET['questionId']) ? $_GET['questionId'] : 0;
    $pergunta = Question::carregaPergunta($questionId); 

    ?>

    <?php require "partials/pergunta.inc"; ?>
</body>

</html>