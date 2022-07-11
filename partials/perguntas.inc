<?php 
$questions = [
    "Droga, é a:" => [
        "Insituição Ulisses Drummond",
        "Loud",
        "Lele",
        "Noia"
    ],

    "Bandex?" => [
        "É o catabolizas",
        "Sim.",
        "Vitão0808",
        "Carne na engenharia e pratão no bandex",
        "Janta no bandex?"
    ],

    "ICP significa:" => [
        "Instituto de Ciências Políticas",
        "Instituto de Criadores de Ponteiros",
        "Instituto de Criadores de Pessoas",
        "Instituto Catarina Parreiras",
        "International Center of Problems"
    ],

    "A call é:" => [
        "Comer frutos",
        "Marmitar caloura",
        "Pod e alcool",
        "Catabolizar e tomar anabolizantes para anabolizar o que você catabolizou"
    ],

    "Complete a frase corretamente: Só o _____ " => [
        "Necessário",
        "Essencial",
        "Básico",
        "Fundamental"
    ],
];

function carregaPergunta($id){
    $question = array_keys($questions)[$id];

    echo "<h2>$question</h2>";
    echo "<ol type='a'>";
    foreach ($question => $answers as $answer) {
        echo "<li> $answer</li>";
    }
    echo "</ol>";
}

?>