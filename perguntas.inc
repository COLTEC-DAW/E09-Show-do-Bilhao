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

    function carregaPergunta($id)
    {
        global $perguntas, $alternativas, $alternativasCorretas;
        $increment = 0;
        echo "<p>A resposta em <strong>NEGRITO</strong> é a CORRETA.</p>";

        echo $perguntas[$id]."<br><br>";
        foreach($alternativas[$id] as $elemento)
        {
            if($increment == $alternativasCorretas[$id])
            {
                echo "<strong>".$elemento."</strong><br>";
                $increment++;
            }
            else
            {
                echo $elemento."<br>";
                $increment++;
            }
        }

    }
?>