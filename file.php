<?php
    function controlepergunta($index) {
        if($index == NULL)
            $index = 0;

        $pergunta[] = "Quanto tempo durou a Guerra dos Cem Anos?";
        $pergunta[] = "O que você coloca em uma torradeira?";
        $pergunta[] = "O que pesa mais?";
        $pergunta[] = "Quem nasceu primeiro, o ovo ou a galinha?";
        $pergunta[] = "Qual o time mineiro que não tem bi-campeonato?";
    
        return $pergunta[$index];

    }

    function controlegabarito($index) {
        if($index == NULL)
            $index = 0;

        $gabarito = array(3,2,0,2,3);

        return $gabarito[$index];
    }
        
    function controlerespostas($index) {
        if($index == NULL)
            $index = 0;

        $resposta = array(
            0 => array("10 anos", "20 anos", "50 anos", "100 anos"),
            1 => array("Torrada", "Bolo", "Pão", "Bolacha"),
            2 => array("Sua Mãe", "1 tonelada de algodão", "1 tonelada de arroz", "1 tonelada de chumbo"),
            3 => array("Ovo", "Galinha", "Sim", "Não"),
            4 => array("Galo Mineiro", "Alt-MG", "Clube Atlético Mineiro", "Atlético Mineiro"),
        );

        return $resposta[$index];
    }

?>