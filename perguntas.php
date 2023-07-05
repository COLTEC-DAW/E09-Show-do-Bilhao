<?php

session_start();

if (!isset($_SESSION['logado'])) {
    header('location: login.php');
}

require_once "class/Question.inc";
require_once "class/User.inc";
require_once "class/utils.inc";


// Tratando a requisição
$method = $_SERVER['REQUEST_METHOD'];

if (!isset($totalPerguntas)) {
    $totalPerguntas = Question::getCountPerguntas();
}

if (!isset($_COOKIE['numeroAcertos'])) {
    setcookie('numeroAcertos', 0);
    $numeroAcertos = 0;
} else {
    $numeroAcertos = $_COOKIE['numeroAcertos'];
}


if(isset($_COOKIE['lastScore'])){
    $lastScore = $_COOKIE['lastScore'];
}
else{
    $lastScore = 0;
    setcookie('lastScore', 0);
}

if ($method == 'POST') {
    $questionId = $_POST['questionId'];


    if (isset($_POST['alternativa'])) {

        // Checa se o usuário acertou
        if ($_POST['alternativa'] + 1 === Question::carregaPergunta($questionId)->alternativa_correta) {
            $numeroAcertos++;
            setcookie('numeroAcertos', $numeroAcertos);

            //Checa se o usuário já finalizou o quiz
            goToNextQuestion($questionId);
        } else {
            setcookie('lastScore', $numeroAcertos);
            $lastScore = $numeroAcertos;
            gameOver();
        }

        //Checa se o usuário já finalizou o quiz
        if ($questionId + 1 >= Question::getCountPerguntas()) {
            setcookie('lastScore', $numeroAcertos);
            $lastScore = $numeroAcertos;
            gameWin();
        }
    } else {
        $questionId = $_POST['questionId'];
    }
} elseif ($method == 'GET') {
    if (isset($_GET['questionId'])) {
        $questionId = $_GET['questionId'];
    } else {
        $questionId = 0;

        setcookie('numeroAcertos', 0);
        $numeroAcertos = 0;


    }


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
        <h1><a href="index.php">Show do Bilhão</a></h1>
        <?php require_once "partials/menu.inc"; ?>
    </div>

    <!-- Barra de Progresso -->
    <div class="progress-bar">
        <div class="progress" style="width: 0;"></div>
    </div>
    <span class="progress-texto"></span>



    <!-- Perguntas -->

    <?php echoPergunta($questionId); ?>
    <script>atualizarBarraProgresso(<?php echo $numeroAcertos . ", " . $totalPerguntas; ?>)</script>

    <p>Sua última pontuação foi:
        <?php echo $lastScore; ?>
    </p>


    <!-- Rodape -->
    <?php require_once "partials/rodape.inc"; ?>

</body>

</html>