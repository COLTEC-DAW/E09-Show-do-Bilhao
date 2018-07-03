<?php
    $enunciados = [
        "Quem traiu a cantora brasileira Joelma?",
        "Na frase 'sabe de nada' do grande pensador contemporâneo Compadre Washington, o sujeito é:",
        "Quem vai ganhar a Copa do Mundo 2018?",
        "Um carro foda X Celta 2012, os dois a 80km, um fica do lado do outro?",
        "Quem é o melhor rapper da atualidade?"
    ];

    $alternativas = [
        $enunciados[0] => [
            "A lua",
            "O chimbinha",
            "A lua e o chimbinha",
            "Willian Bonner"
        ],
        $enunciados[1] => [
            "Simples",
            "Indeterminado",
            "Oculto",
            "Inocente"
        ],
        $enunciados[2] => [
            "França",
            "Brasil",
            "Bélgica",
            "Fagner"
        ],
        $enunciados[3] => [
            "Creio que não",
            "Claro",
            "Sim, 80km é 80km",
            "Menino Ney"
        ],
        $enunciados[4] => [
            "Drake (humildão)",
            "Eminem",
            "xis xis xis tentação deus do rap (RIP)",
            "Post Malone"
        ]
    ];

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/index.css">
        <title>Show do Bilhão - 2018</title>
    </head>

    <body>
        
        <header>

            <img src="images/show.jpg">
            
        </header>

        <div class="container">

            <?php

                foreach($enunciados as $enunciado) {
                    echo "<h3 class='enunciado'> $enunciado </h3>";
                    foreach($alternativas[$enunciado] as $alternativa) {
                        echo "<div class='cont'>
                                <input type='radio' name='$enunciado' class=''>
                                    <span class='checkmark'>" . 
                                    $alternativa . 
                                    "</span>
                              </div>";
                    }
                }

            ?>

        </div>

    </body>
</html>