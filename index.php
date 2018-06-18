<?php
    $enunciados = [
        "Enunciado 1",
        "Enunciado 2",
        "Enunciado 3",
        "Enunciado 4",
        "Enunciado 5"
    ];

    $alternativas = [
        "Enunciado 1" => [
            "A",
            "B",
            "C",
            "D"
        ],
        "Enunciado 2" => [
            "E",
            "F",
            "G",
            "H"
        ],
        "Enunciado 3" => [
            "I",
            "J",
            "K",
            "L"
        ],
        "Enunciado 4" => [
            "M",
            "N",
            "O",
            "P"
        ],
        "Enunciado 5" => [
            "Q",
            "R",
            "S",
            "T"
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