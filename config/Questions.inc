<?php
    //Questions
    $question1 = new Question();
    $question1->enunciado = "Qual bicho transmite Doença de Chagas?";
    $question1->alternativas = [
        new Alternativa(0, "a", "Abelha"),
        new Alternativa(1, "b", "Barata"),
        new Alternativa(2, "c", "Pulga"),
        new Alternativa(3, "d", "Barbeiro")
    ];
    $question1->alternativaCertaLetter = 'd';

    $question2 = new Question();
    $question2->enunciado = "Qual fruto é conhecido no Norte e Nordeste como 'jerimum'?";
    $question2->alternativas = [
        new Alternativa(0, "a", "Caju"),
        new Alternativa(1, "b", "Abóbora"),
        new Alternativa(2, "c", "Chuchu"),
        new Alternativa(3, "d", "Côco")
    ];
    $question2->alternativaCertaLetter = 'b';

    $question3 = new Question();
    $question3->enunciado = "Qual é o coletivo de cães?";
    $question3->alternativas = [
        new Alternativa(0, "a", "Matihla"),
        new Alternativa(1, "b", "Rebanho"),
        new Alternativa(2, "c", "Alcateia"),
        new Alternativa(3, "d", "Manada")
    ];
    $question3->alternativaCertaLetter = 'a';

    $question4 = new Question();
    $question4->enunciado = "Qual é o triângulo que tem todos os lados diferentes?";
    $question4->alternativas = [
        new Alternativa(0, "a", "Equilátero"),
        new Alternativa(1, "b", "Isóceles"),
        new Alternativa(2, "c", "Escaleno"),
        new Alternativa(3, "d", "Trapézio")
    ];
    $question4->alternativaCertaLetter = 'c';

    $question5 = new Question();
    $question5->enunciado = "Quem compôs o Hino Nacional Brasileiro?";
    $question5->alternativas = [
        new Alternativa(0, "a", "Dom Pedro I."),
        new Alternativa(1, "b", "Francisco Manuel da Silva"),
        new Alternativa(2, "c", "Castro Alvez"),
        new Alternativa(3, "d", "Carlos Gomes")
    ];
    $question5->alternativaCertaLetter = 'b';
?>