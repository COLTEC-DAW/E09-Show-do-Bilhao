<?php   

    function carregaPergunta($id){

    $perguntas = [
        "1 - Qual bicho transmite a Doença de Chagas?",
        "2 - Qual é o coletivo de cães?",
        "3 - Qual é o triângulo que tem todos os lados diferentes?"
    ];

    $respostas = [
        ["Abelha", "Barata", "Pulga", "Barbeiro"],
        ["Matilha", "Rebanho", "Alcateia", "Manada"],
        ["Equilátero", "Isóceles", "Escaleno", "Trapézio"]
    ];

    $corretas = [3, 0, 2];

    echo "<p>{$perguntas[$id]}</p><br>";
    
    echo "<p>A) {$respostas[$id][0]}</p>";
    echo "<p>B) {$respostas[$id][1]}</p>";
    echo "<p>C) {$respostas[$id][2]}</p>";
    echo "<p>D) {$respostas[$id][3]}</p>";

    }
?>