
<?php
/**
* @file   Perguntas.php
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
"Qual é o coletivo de cães?",
"Qual é o triângulo qye tem todos os lados diferentes?", 
"Quem compos o hino da independencia?",
"Qual é o antônimo de malograr?"
];

//matriz com as Alternativas
$Alternativas = [
    ["Abelha", "Barata", "Pulga", "Barbeiro"],
    ["Caju", "Abobora", "Chuchu", "Côco"],
    ["Matilha", "Rebanho", "Alcateia", "Manada"],
    ["Equilatero", "Isoceles", "Escaleno", "Trapezio"],
    ["Dom Pedro I", "Manuel bandeira", "Castro Alvez", "Carlos Gomez"],
    ["Perder", "Fracassar", "Conseguir", "Desprezar"]
];

//vetor com o índice para a alternativa certa
$AlternativaCerta = [3, 1, 0, 2, 0, 2];
