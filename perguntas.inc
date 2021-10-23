<?php
    $perguntas = 
    [
        "SEGUNDO O DITADO POPULAR: DEUS AJUDA...",
        "UMA NOVENA CORRESPONDE A QUANTOS DIAS?!",
        "O 'SUSHI' E O 'SASHIMI' SÃO COMIDAS TIPICAS DE QUAL PAÍS?"
    ];
    $alternativas = 
    [
        [
            "A) A QUEM MENOS SE ESPERA",
            "B) A QUEM CEDO MADRUGA", 
            "C) A QUEM REZA MUITO"
        ],

        [
            "A) 90",
            "B) 900",
            "C) 9"
        ],

        [
            "A) CHINA",
            "B) VIETNAM",
            "C) JAPAO"
        ],
        ];
    $altCorret = [1, 0, 1, 1, 2];
 
    function carregaPerguntas($id)
    {
        global $perguntas, $alternativas, $altCorret;
        $i = 0;

        echo $perguntas[$id]."<br><br>";

        foreach($alternativas[$id] as $item){
            if($i == $altCorret[$id]){
                echo "<strong>".$item."</strong><br>";
                $i++;
            }
            else{
                echo $item."<br>";
                $i++;
            }
        }
        echo "<br>";
    }
?>