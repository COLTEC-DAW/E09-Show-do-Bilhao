<?php
require "./perguntas.inc";
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

    <div class="col_12">
        <h2>Pergunta desejada:</h2>
        <div class="perguntas">
            <form method="get">
                <select name="id">
                    <option value="0">Primeira pergunta</option>
                    <option value="1">Segunda pergunta</option>
                    <option value="2">Terceira pergunta</option>
                    <option value="3">Quarta pergunta</option>
                    <option value="-1">(Nenhuma)</option>
                </select>
                &nbsp
                <button>Selecionar</button>
            </form>
        </div>

        <br>
        <hr>

        <div>
            <?php
            if (isset($_GET["id"])) {
                if (verificaID($_GET["id"])) {
                    echo "<h2>Pergunta selecionada:</h2>";
                    exibePergunta($_GET["id"]);
                    echo "<br> <hr>";
                }
            }
            ?>
        </div>
    </div>

    <?php
    include "./rodape.inc";
    ?>
</body>

</html>