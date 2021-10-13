<?php
session_start();
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


function carregaPergunta($id)
{
    global $enunciados, $alternativas, $altsCorretas;

    $pergunta = array(
        "enunciado" => $enunciados[$id],
        "alternativas" => $alternativas[$id],
        "resposta" => $altsCorretas[$id]
    );

    return $pergunta;
}

function exibePergunta($id)
{
    // Imprime o enunciado da pergunta, em negrito e destacado
    $pergunta = carregaPergunta($id);
    $enunciado = $pergunta["enunciado"];
    $alternativas = $pergunta["alternativas"];

    echo "<h3>" . ($id + 1) . ". $enunciado </h3>";

    echo "<form method='post'>";

    // Imprime as alternativas
    for ($j = 0; $j < count($alternativas); $j++) {
        echo "<input type='radio' name='alternativa' value='" . $j . "'>";
        echo "&nbsp&nbsp" . $alternativas[$j] . "<br>";
    }
    echo "<br>";
    echo "<input type='hidden' id='id' name='id' value='" . ($id + 1) . " '>";
    echo "<button>Enviar</button>";
    echo "</form>";
}

function verificaResposta($id, $alternativa)
{
    $pergunta = carregaPergunta($id - 1);
    $resposta = $pergunta["resposta"];

    if ($alternativa == $resposta) {
        if ($id >= 4) {
            defineCookies($id);
            header("Location: /win.php");
        }
    } else {
        defineCookies($id);
        header("Location: /gameOver.php");
    }
}

function verificaID($id)
{
    global $enunciados;
    // Se o valor não for numérico, for negativo ou estiver fora
    // do tamanho do array, a pergunta não é impressa
    if (!(is_numeric($id)) || $id < 0 || $id > count($enunciados)) {
        return false;
    }

    return true;
}

function defineCookies($id)
{
    date_default_timezone_set('America/Sao_Paulo');
    setcookie(("lastGame" . $_SESSION["name"]), date("j.n.Y, g:i a"), time() + (86400 * 30), '/');
    setcookie(("lastScore" . $_SESSION["name"]), $id - 1, time() + (86400 * 30), '/');
}
