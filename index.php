<?php

$enunciados = array(
    "Normalmente, quantos litros de sangue uma pessoa tem? Em média, quantos são retirados numa doação de sangue?",
    "De quem é a famosa frase “Penso, logo existo”?",
    "De onde é a invenção do chuveiro elétrico?",
    "Quais o menor e o maior país do mundo?"
);
$alternativas = array(
    array(
        "a) Tem entre 2 a 4 litros. São retirados 450 mililitros",
        "b) Tem entre 4 a 6 litros. São retirados 450 mililitros",
        "c) Tem 10 litros. São retirados 2 litros",
        "d) Tem 7 litros. São retirados 1,5 litros"
    ),
    array(
        "a) Platão",
        "b) Galileu Galilei",
        "c) Descartes",
        "d) Sócrates"
    ),
    array(
        "a) França",
        "b) Inglaterra",
        "c) Brasil",
        "d) Austrália"
    ),
    array(
        "a) Vaticano e Rússia",
        "b) Nauru e China",
        "c) Mônaco e Canadá",
        "d) Malta e Estados Unidos"
    )
);

$altsCorretas = array(
    1, 2, 2, 0
);

function exibePerguntas()
{
    global $enunciados, $alternativas, $altsCorretas;
    for ($i = 0; $i < count($enunciados); $i++) {
        // Imprime o enunciado da pergunta, em negrito e destacado
        echo "<h3>" . ($i + 1) . ". $enunciados[$i]</h3>";

        // Imprime as alternativas
        for ($j = 0; $j < count($alternativas); $j++) {
            // A alternativa certa será impressa em negrito
            if ($j == $altsCorretas[$i]) {
                $alternativas[$i][$j] = "<b>" . $alternativas[$i][$j] . "</b>";
            }
            echo "&nbsp&nbsp" . $alternativas[$i][$j] . "<br>";
        }
    }
}

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
    <div class="col_12">
        <h1>Show do Bilhão!!</h1>
    </div>

    <div class="col_12">
        <h2>Perguntas:</h2>
        <div class="perguntas">
            <?php
            exibePerguntas();
            ?>
        </div>
    </div>
</body>

</html>