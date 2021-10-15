<?php
    $perguntas = 
    [
        "Em qual ano ocorreu a Apollo 11, primeiro voo espacial a pousar na lua?",
        "O macarrão instantâneo foi inventado nos anos 1950, no Japão, por:",
        "Qual é o coletivo de cães?",
        "Quantos noves tem de 0 a 100?",
        "Qual o maior artilheiro da Champions League?"
    ];

    $alternativas = 
    [
        [
            "A) 1968",
            "B) 1969", 
            "C) 1970",
            "D) 1971"
        ],

        [
            "A) Shuji Nakamura",
            "B) Yoshiro Nakamatsu",
            "C) Fujio Masuoka",
            "D) Momofuku Ando"
        ],

        [
            "A) Alcateia",
            "B) Manada",
            "C) Matilha",
            "D) Rebanho"
        ],

        [
            "A) 10",
            "B) 11",
            "C) 19",
            "D) 20"
        ],

        [
            "A) Cristiano Ronaldo",
            "B) Lionel Messi",
            "C) Raúl González",
            "D) Ruud van Nistelrooy"
        ]
        ];

    $alternativasCorretas = [1, 3, 2, 3, 0];

    function exibirPerguntas_Alternativas_E_AlternativasCorretas()
    {
        global $perguntas, $alternativas, $alternativasCorretas;
        echo "<p>A resposta em <strong>NEGRITO</strong> é a CORRETA.</p>";
        
        for ($i = 0; $i < count($perguntas); $i++) 
        {
            //Imprime uma pergunta
            echo ($i + 1) . "° Pergunta: $perguntas[$i]<br><br>";
    
            // Imprime as alternativas
            for ($j = 0; $j < count($alternativas); $j++) 
            {
                // A alternativa certa será impressa em negrito
                if ($j == $alternativasCorretas[$i]) 
                {
                    echo "<strong>".$alternativas[$i][$j]."</strong><br>";
                }
                else
                {
                    echo $alternativas[$i][$j]."<br>";
                }
            }
            echo "<br>";
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
<body>
    <h1>Seja Bem Vindo ao Show do Bilhão</h1>
    <div>
        <?php
            exibirPerguntas_Alternativas_E_AlternativasCorretas();
        ?>
    </div>
    
</body>
</html>