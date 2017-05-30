<?php
    $perguntas[0] = 'Qual é o livro mais impresso do mundo?';
    $alternativas[0][0] = 'Jubiabá';
    $alternativas[0][1] = 'Bíblia';
    $alternativas[0][2] = 'Gabriela, Cravo e Canela';
    $alternativas[0][3] = 'Terras do Sem Fim';
    $resposta[0] = 1;

    $perguntas[1] = 'Qual é o nome do osso da coxa do ser humano?';
    $alternativas[1][0] = 'Fêmur';
    $alternativas[1][1] = 'Tíbia';
    $alternativas[1][2] = 'Perônio';
    $alternativas[1][3] = 'Úmero';
    $resposta[1] = 0;

    $perguntas[2] = 'Um analgésico é um agente para:';
    $alternativas[2][0] = 'Tratamento do intestino';
    $alternativas[2][1] = 'Alívio de estresse';
    $alternativas[2][2] = 'Alívio da dor';
    $alternativas[2][3] = 'Tratamento da caspa';
    $resposta[2] = 2;

    $perguntas[3] = 'De que é feito o pé-de-moleque';
    $alternativas[3][0] = 'Amendoim';
    $alternativas[3][1] = 'Castanha';
    $alternativas[3][2] = 'Alcaparra';
    $alternativas[3][3] = 'Abacate';
    $resposta[3] = 0;

    $perguntas[4] = 'O que é a morsa?';
    $alternativas[4][0] = 'Um réptil';
    $alternativas[4][1] = 'Um mamífero';
    $alternativas[4][2] = 'Um peixe';
    $alternativas[4][3] = 'Um crustáceo';
    $resposta[4] = 1;

    $perguntas[5] = 'Qual destas palvras é sinônimo de equívoco';
    $alternativas[5][0] = 'Acerto';
    $alternativas[5][1] = 'Equitação';
    $alternativas[5][2] = 'Engano';
    $alternativas[5][3] = 'Cavalo';
    $resposta[5] = 2;

    for($i=0; $i<count($perguntas); $i++){
        
        echo "<h4>" . $perguntas[$i] . "</h4>"

        for($j=0; $j<6; $j++){
            echo $i . ". " . $alternativas[$i][$j];
        }
    }
?>