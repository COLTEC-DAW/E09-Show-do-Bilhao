<?php
    function controle() {
        $pergunta[] = "Quanto tempo durou a Guerra dos Cem Anos?";
        $pergunta[] = "O que você coloca em uma torradeira?";
        $pergunta[] = "O que pesa mais?";
        $pergunta[] = "Quem nasceu primeiro, o ovo ou a galinha?";
        $pergunta[] = "Qual o time mineiro que não tem bi-campeonato?";

        $gabarito = array(4,3,1,3,4);

        $resposta = array(
            0 => array("10 anos", "20 anos", "50 anos", "100 anos"),
            1 => array("Torrada", "Bolo", "Pão", "Bolacha"),
            2 => array("Sua Mãe", "1 tonelada de algodão", "1 tonelada de arroz", "1 tonelada de chumbo"),
            3 => array("Ovo", "Galinha", "Sim", "Não"),
            4 => array("Galo Mineiro", "Alt-MG", "Clube Atlético Mineiro", "Atlético Mineiro"),
        );

        for($index = 0; $index < 5; $index++) {
            echo($pergunta[$index]);
            echo($resposta[$index][0]);
            echo($resposta[$index][1]);
            echo($resposta[$index][2]);
            echo($resposta[$index][3]);
            echo($resposta[$index][4]);
          }
        
    }

?>