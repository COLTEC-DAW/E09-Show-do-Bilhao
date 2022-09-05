<?php
include "questoes.php";
date_default_timezone_set('America/Sao_Paulo');

$id = $_POST["id"];

if ($id == 0) {
    $date = date('Y-m-d H:i:s');
    setcookie("date", $date);
}

if ($id == 5) {
    header("Location: ganhou.html");
}

$alternativaClicada = $_POST["radioResposta"];

function TestaSeAcertou()
{
    global $id;
    global $alternativaClicada;
    global $vetorAlternativasCorretas;
    $idMenosUm = $id - 1;

    if ($alternativaClicada == $vetorAlternativasCorretas[$idMenosUm]) {
    } else {
        header("Location: faliu.html");
    }
}

if (!($alternativaClicada == -1)) { //Testa se é a primeira página
    TestaSeAcertou();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Show do Ericao</title>
    <link href="style.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./images/fotoCara.png">


</head>

<body>
    <div class="backgroundIndex">
        <div class="divCentral position-absolute top-50 start-50 translate-middle card cardCentral">
            <div class="cardCentral card-body text-light-75 text-center">

                <form action="paginaInicial.php" method="post">
                    <button class="btn btn-info botaoLogout col-4" name="logout" value="1">Logout</button>

                </form>

                <?php
                function GeraButoesDasAlternativas($vetorDasAlternativas, $id)
                {

                    echo '<form action="index.php" class="d-flex flex-column justify-content-start align-items-center"  method="post">';
                    for ($indiceAlternativaAtual = 0; $indiceAlternativaAtual < 4; $indiceAlternativaAtual++) {
                        echo '<input type="radio" id=' . $indiceAlternativaAtual . ' name="radioResposta" value=', $indiceAlternativaAtual, '>';
                        echo '<label class="align-items-center" for=' . $indiceAlternativaAtual . '>';
                        echo ($vetorDasAlternativas[$id][$indiceAlternativaAtual]);
                        echo '</label>';
                        echo "<br>";
                    }
                    echo '<input type="submit" class="btn btn-primary fs-3 col-4" value="Enviar"  name="botaoRadioResposta">';

                    echo '<input type="hidden" value=', $id + 1, ' name="id">';


                    echo "</form>";
                };
                ?>
                <?php

                function GeraTituloPergunta($id)
                {

                    global $vetorEnunciados;
                    echo ($vetorEnunciados[$id]);
                    echo "<br>";
                    echo "<br>";
                }
                function GeraPerguntasRespondidas($id)
                {
                    echo "<h3> Perguntas respondidas:"  . $id . "</h3>";
                    echo "<br>";
                    echo "<br>";
                }

                GeraTituloPergunta($id);
                GeraPerguntasRespondidas($id);

                ?>

                <div class="text-center align-items-center justify-content-between">
                    <?php

                    GeraButoesDasAlternativas($vetorAlternativas, $id);

                    ?>

                </div>

                <br>

            </div>

        </div>

    </div>


</body>

</html>