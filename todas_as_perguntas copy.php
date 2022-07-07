<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <?php 
    $enunciados = [
        "Segundo a gramática, 'y' é uma/um:",
        "Bandex?",
        "Segundo o ICP, qual é o maior mal da atualidade?",
        "Ao ouvir o tema de grafos, quem é a pessoa mais provável de estar falando:",
        "Qual das alternativas a seguir 'dá shape': "
    ];
    $alternativas = [
        ["Vogal","Depende","Semivogal","Consoante"],
        ["No almoço", "No almoço e jantar", "Eu prefiro comer na Engenharia", "No café da manhã, almoço e jantar"],
        ["Eliezer/Esquerda", "Astrologia", "Bebida", "Neoliberalismo"],
        ["Ullas", "Moras", "Amanda", "Éric"],
        ["Fruta", "Bandex", "Café", "Corote"]
    ];
    $respostas = [1,3,1,0,1];
    
    for($i = 0; $i < count($enunciados); $i++){
        echo "<h2> {$enunciados[$i]} </h2>";
        echo "<ol type='A'>";
        for($j = 0; $j < count($alternativas[$i]); $j++){
            echo "<li>{$alternativas[$i][$j]} </li>";
        }
        echo "</ol>";
    }
    ?>
</body>
</html>