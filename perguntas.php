<?php
require "./perguntas.inc";

// Se o jogo estiver começando, define a primeira pergunta como a ser exibida
if (!isset($_POST["id"]) || !isset($_POST["alternativa"])) {
    $_POST["id"] = 0;
} else {
    // Se o ID for válido, verifica a resposta; caso contrário, vai pra página de erro
    if (verificaID(intval(($_POST["id"])))) {
        verificaResposta(intval($_POST["id"]), $_POST["alternativa"]);
    } else {
        header("Location: /gameOver.php");
    }
}

$id = intval(($_POST["id"]));
$numAcertos = $id;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>

<body class="container">
    <?php
    include "./menu.inc";
    ?>
    <br>
    <hr>
    <!-- Se chegou até aqui, tá tudo certo! -->
    <div class="content">
        <p><b>Número de acertos: <?= $numAcertos ?></b> </p>
        <h2>Pergunta:</h2>
        <?php exibePergunta($id); ?>
    </div>

    <br>
    <hr>

    <?php
    include "./rodape.inc";
    ?>
</body>

</html>