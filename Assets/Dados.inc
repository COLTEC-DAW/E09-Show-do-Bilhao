<?php

    $perguntas = [
        "Qual é a linguagem de programação que come criancinhas?",
        "Quem é o presidente do Brasil?",
        "Quanto é 7x8?",
        "Quem descobriu o Brasil?",
        "Qual o melhor achocolatado?",
        "Qual o nome cientifico do lobo?",
        "Como usar uma crase?",
        "Quem é Leandro Maia?"
    ];

    $opcoes = [
        ["Java Script", "Java sem script", "C#", "C", "Pudim de Pão"],
        ["Salnorabo", "Bozonaro", "Vagabundo", "Bolsonaro", "Micto"],
        ["3/4", "56","1,2", "42", "Não sei"],
        ["Pedro das quebradas", "Cristovão com o Lombo", "Pedro Alvares Cabral", "Os indios", "Shrek Terceiro"],
        ["Toddy", "Nescau", "Italac", "Vilma", "3 corações"],
        ["cao com dente grande", "Canis lupus", "insipt vita nova", "Au-Au cachorro", "Jacob do Crepusculo"],
        ["Para concatenar facilmente strings em Js", "Odeio portugues", "Eu não sei nem usar virgula", "Não sei como passei de ano em portugues", "Socorro!"],
        ["Professor de programação", "O terror das novinhas", "Muleke piranha", "Aquele que não deve ser nomeado", "Para o cego, é a luz. Para o faminto, é o pão. Para o sedento, é a fonte de água limpa. Para o morto, é a vida. Para o enfermo, é a cura. Para o prisioneiro, é a liberdade. Para o solitário, é o companheiro. Para o viajante, é o caminho. Para o sábio, é a sabedoria."]
    ];

    $RespostasCorretas = [0,3,1,2,0,1,0,4];

    function GetQuestao($indice){

        $inicio = "<div>";
        $fim = "</div>";

        $questao = $inicio . $GLOBALS["perguntas"][$indice] . "<br>";

        $opcoes = ["A", "B", "C", "D", "E"];

        for($i = 0; $i < 5; $i++){
            $questao = $questao . $opcoes[$i] . ")" . $GLOBALS["opcoes"][$indice][$i] . "<br>";
        }

        $questao = $questao . "A resposta correta é: " . $opcoes[$GLOBALS["RespostasCorretas"][$indice]] . ")" . $GLOBALS["opcoes"][$indice][$GLOBALS["RespostasCorretas"][$indice]] . $fim;

        return $questao;
    }

    function randomGen($min, $max, $quantity) {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }

    function MostrarPerguntas(){

        $inicio = "<div>";
        $fim = "</div>";
        $Jogo = "";

        $Questoes = randomGen(0,7,5);

        $Jogo = $Jogo . $inicio;
        for($i = 0; $i < 5; $i++){

            $Jogo = $Jogo . GetQuestao($Questoes[$i]) . "<br>";
        }

        return $Jogo . $fim;
    }

?>