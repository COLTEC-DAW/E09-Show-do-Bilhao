<?php
    $gabarito = ["B", "C", "A", "D", "C"];

    $enunciados = ["Qual o maior sonho de Isagi Yoichi, de Blue Lock: ", 
                    "Em Solo Leveling, qual foi o último monarca que Sung-Jinwoo enfrentou: ", 
                    "Qual é o andar mais alto conquistado atualmente em Tower of God: ", 
                    "O que ocorreu com o corpo do Rei das Maldições, Ryomen Sukuna, após sua morte: ", 
                    "Kafka Hibino, se torna um Kaiju numerado após: "];

    $alternativas = [["Se tornar o melhor goleiro do mundo.", "Se tornar o melhor atancante do mundo.", "Se tornar o melhor ala do mundo.", "Se tornar o melhor assassino do mundo."],
                    ["O monarca das sombras.", "O monarca das feras.", "O monarca dos dragões.", "O monarca das gelo."],
                    ["134° Andar.", "68° Andar.", "756° Andar.", "228° Andar."],
                    ["Foi destruido.", "Desapareceu.", "Foi separado e isolado em diversos lugares.", "Foi selado em uma montanha."],
                    ["Ser mordido por um Kaiju.", "Matar um Daikaiju.", "Engolir um Kaiju.", "Passar por experimentos de laboratórios."]];


    function carregaPergunta($id){
        global $enunciados;
        global $alternativas;
        global $gabarito;

        $pergunta = $enunciados[$id];
        $alt = $alternativas[$id];
        $resposta = $gabarito[$id];

        $dados = [$pergunta, $alt, $resposta];

        return $dados;

    }

    function retornaGabarito(){
        global $gabarito;

        return $gabarito;
    }

?>