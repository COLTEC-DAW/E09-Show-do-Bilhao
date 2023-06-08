<?php
    
    //Questions
    $question1 = new Question();
    $question1->enunciado = "Enum1";
    $question1->alternativas = [
        new Alternativa(0, "a", "Alternativa1"),
        new Alternativa(1, "b", "Alternativa2"),
        new Alternativa(2, "c", "Alternativa3"),
        new Alternativa(3, "d", "Alternativa4")
    ];
    $question1->alternativaCertaLetter = 'd';

    $question2 = new Question();
    $question2->enunciado = "Enum2";
    $question2->alternativas = [
        new Alternativa(0, "a", "Alternativa1"),
        new Alternativa(1, "b", "Alternativa2"),
        new Alternativa(2, "c", "Alternativa3"),
        new Alternativa(3, "d", "Alternativa4")
    ];
    $question2->alternativaCertaLetter = 'b';

    $question3 = new Question();
    $question3->enunciado = "Enum3";
    $question3->alternativas = [
        new Alternativa(0, "a", "Alternativa1"),
        new Alternativa(1, "b", "Alternativa2"),
        new Alternativa(2, "c", "Alternativa3"),
        new Alternativa(3, "d", "Alternativa4")
    ];
    $question3->alternativaCertaLetter = 'a';

    $question4 = new Question();
    $question4->enunciado = "Enum4";
    $question4->alternativas = [
        new Alternativa(0, "a", "Alternativa1"),
        new Alternativa(1, "b", "Alternativa2"),
        new Alternativa(2, "c", "Alternativa3"),
        new Alternativa(3, "d", "Alternativa4")
    ];
    $question4->alternativaCertaLetter = 'a';

    $question5 = new Question();
    $question5->enunciado = "Enum5";
    $question5->alternativas = [
        new Alternativa(0, "a", "Alternativa1"),
        new Alternativa(1, "b", "Alternativa2"),
        new Alternativa(2, "c", "Alternativa3"),
        new Alternativa(3, "d", "Alternativa4")
    ];
    $question5->alternativaCertaLetter = 'c';
?>