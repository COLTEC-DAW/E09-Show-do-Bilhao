<?php
$perguntas = array(
    "Quais são os três predadores do reino animal reconhecidos pela habilidade de caçar em grupo, se camuflar para surpreender as presas e possuir sentidos apurados, respectivamente:",
    "Qual a altura da rede de vôlei nos jogos masculino e feminino?",
    "Em que ordem surgiram os modelos atômicos?",
    "Qual a montanha mais alta do Brasil?",
    "Quem é o autor de “O Príncipe”?"
);
$alternativas = array(
    array(
        "a) Tubarão branco, crocodilo e sucuri",
        "b) Tigre, gavião e orca",
        "c) Hiena, urso branco e lobo cinzento",
        "d) Orca, onça e tarântula",
        "e) Leão, tubarão branco e urso cinzento",
    ),
    array(
        "a) 2,4 para ambos",
        "b) 2,5 m e 2,0 m",
        "c) 1,8 m e 1,5 m",
        "d) 2,45 m e 2,15 m",
        "e) 2,43 m e 2,24 m"
    ),
    array(
        "a) Thomson, Dalton, Rutherford, Rutherford-Bohr",
        "b) Rutherford-Bohr, Rutherford, Thomson, Dalton",
        "c) Dalton, Rutherford-Bohr, Thomson, Rutherford",
        "d) Dalton, Thomson, Rutherford-Bohr, Rutherford",
        "e) Dalton, Thomson, Rutherford, Rutherford-Bohr"
    ),
    array(
        "a) Pico da Neblina",
        "b) Pico Paraná",
        "c) Monte Roraima",
        "d) Pico Maior de Friburgo",
        "e) Pico da Bandeira"
    ),
    array(
        "a) Maquiavel",
        "b) Antoine de Saint-Exupéry",
        "c) Montesquieu",
        "d) Thomas Hobbes",
        "e) Rousseau"
    )
);

$opCorreta = array(
    2, 4, 4, 0, 0
);

function carregaPergunta($id)
{
    if (verificaID($id)) {
            echo "<h2>Pergunta selecionada:</h2>";
            exibePergunta($id);
            echo "<br> <hr>";
    }
}

function chamapergunta($id){
    global $perguntas, $alternativas, $altsCorretas;

    $pergunta = array(
        "enunciado" => $perguntas[$id],
        "alternativas" => $alternativas[$id],
        "correta" => $opCorretas[$id]
    );

    return $pergunta;
}
function exibePergunta($id)
{
    $pergunta = chamapergunta($id);
    $enunciado = $pergunta["enunciado"];
    $alternativas = $pergunta["alternativas"];
    $correta = $pergunta["correta"];
    echo "<h3>" . ($id + 1) . ". $enunciado </h3>";

    for ($j = 0; $j < count($alternativas); $j++) {
        if ($j == $correta) {
            $alternativas[$j] = "<b>" . $alternativas[$j] . "</b>";
        }
        echo "&nbsp&nbsp" . $alternativas[$j] . "<br>";
    }
}

function verificaID($id)
{
    global $perguntas;
    if (!(is_numeric($id)) || $id == "-1" || $id >= count($perguntas)) {
        return false;
    }

    return true;
}



?> 