<?php
include "./perguntas.inc";
require "./Question.php";
if (!isset($_POST["id"])) {
    $id = 0;
} else {
    if (verifica_id(intval(($_POST["id"])))) {
        $id = intval(($_POST["id"]));
        $ultima =  Question::pega_pergunta($id - 1);
        if (isset($_POST["alternativa"])) {
            if ($ultima->verifica_resposta($_POST["alternativa"])) {
                if ($id >= 4) {
                    coloca_cookies($id);
                    header("Location: ./vitoria.php");
                }
            } else {
                coloca_cookies($id - 1);
                header("Location: ./fimdejogo.php");
            }
        } else {
            $id--;
        }
    } else {
        header("Location: ./fimdejogo.php");
    }
}
$pergunta = Question::pega_pergunta($id);
$quantidade_certas = $id;
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
    <div class="content">
        <p><b>Quantidade de acertos: <?= $quantidade_certas ?></b> </p>

        <h2>Pergunta:</h2>

        <h3><?= ($id + 1) ?>. <?= $pergunta->getpergunta() ?></h3>

        <form method="post">
            <?php foreach ($pergunta->getAlternativas() as $indice => $alternativa) { ?>
                <input type="radio" name="alternativa" value="<?= $indice ?>">
                &nbsp&nbsp<?= $alternativa ?><br>
            <?php }; ?>
            <br>
            <input type="hidden" id="id" name="id" value="<?= ($id + 1) ?>">
            <button>Enviar</button>
        </form>
    </div>

    <?php
    include "./rodape.inc";
    ?>
</body>

</html>