<?php
/**
* @file   PerguntasDados.inc
* @brief  Arquivo com as perguntas e respostas do "Show do Bilhão"
* @author Bruna Pérez
* @date   2021-10-04
*/

//Introdução: Prova de conceito
//Implemente uma página em PHP que carregue e exiba as perguntas (Todas na mesma página).

//Vetor com enunciados das perguntas
$Enunciados = [
"Qual bicho transmite Doença de Chagas?",
"Qual fruto é conhecido no Norte e Nordeste como 'jerimum'?",
"Qual é o triângulo que tem todos os lados diferentes?", 
"Quem compos o hino da independencia?",
"Qual é o antônimo de malograr?"
];

//matriz com as Alternativas
$Alternativas = [
    ["Abelha", "Barata", "Pulga", "Barbeiro"],
    ["Caju", "Abobora", "Chuchu", "Côco"],
    ["Equilatero", "Isoceles", "Escaleno", "Trapezio"],
    ["Dom Pedro I", "Manuel bandeira", "Castro Alvez", "Carlos Gomez"],
    ["Perder", "Fracassar", "Conseguir", "Desprezar"]
];

//vetor com o índice para a alternativa certa
$AlternativaCerta = [3, 1, 2, 0, 2];

// requisição do tipo `GET` para conseguir o índice de acesso da pergunta que será exibida
function ConsegueIndicePergunta($indice){

    $inicio = "<div>";
    $fim = "</div>";

    $pergunta = $inicio . $GLOBALS["Enunciados"][$indice] . "<br>" . "<br>";

    $alternativas = ["A", "B", "C", "D"];

    for($i = 0; $i < 4; $i++){
        $pergunta = $pergunta . $alternativas[$i] . ")" . $GLOBALS["Alternativas"][$indice][$i] . "<br>";
    }

    $pergunta = $pergunta . "<br>" . "A resposta correta é: " . $alternativas[$GLOBALS["AlternativaCerta"][$indice]] . $GLOBALS["Alternativas"][$indice][$GLOBALS["RespostasCorretas"][$indice]] . $fim. "<br>";

    return $pergunta;
    //retorna a pergunta formatada
}

// função que exibe as perguntas formatadas na tela
function ExibePerguntas(){

    $inicio = "<div>";
    $fim = "</div>";
    $jogo = "";

   // $numAtual = 0;
    $jogo = $jogo . $inicio;

    for($i = 0; $i < 5; $i++){

        $jogo = $jogo . ConsegueIndicePergunta($i) . "<br>";
    }

    return $jogo . $fim;
}
?>