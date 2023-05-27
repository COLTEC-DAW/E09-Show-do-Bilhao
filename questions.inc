<?php
    //Questions
    $question1 = new Question();
    $question1->enunciado = "Enum1";
    $question1->alternativas = [
        new Alternativa("a", "Alternativa1"),
        new Alternativa("b", "Alternativa2"),
        new Alternativa("c", "Alternativa3"),
        new Alternativa("d", "Alternativa4")
    ];
    $question1->alternativaCertaIndex = 3;

    $question2 = new Question();
    $question2->enunciado = "Enum2";
    $question2->alternativas = [
        new Alternativa("a", "Alternativa1"),
        new Alternativa("b", "Alternativa2"),
        new Alternativa("c", "Alternativa3"),
        new Alternativa("d", "Alternativa4")
    ];
    $question2->alternativaCertaIndex = 1;

    $question3 = new Question();
    $question3->enunciado = "Enum3";
    $question3->alternativas = [
        new Alternativa("a", "Alternativa1"),
        new Alternativa("b", "Alternativa2"),
        new Alternativa("c", "Alternativa3"),
        new Alternativa("d", "Alternativa4")
    ];
    $question3->alternativaCertaIndex = 0;

    $question4 = new Question();
    $question4->enunciado = "Enum4";
    $question4->alternativas = [
        new Alternativa("a", "Alternativa1"),
        new Alternativa("b", "Alternativa2"),
        new Alternativa("c", "Alternativa3"),
        new Alternativa("d", "Alternativa4")
    ];
    $question4->alternativaCertaIndex = 0;

    $question5 = new Question();
    $question5->enunciado = "Enum5";
    $question5->alternativas = [
        new Alternativa("a", "Alternativa1"),
        new Alternativa("b", "Alternativa2"),
        new Alternativa("c", "Alternativa3"),
        new Alternativa("d", "Alternativa4")
    ];
    $question5->alternativaCertaIndex = 2;
?>