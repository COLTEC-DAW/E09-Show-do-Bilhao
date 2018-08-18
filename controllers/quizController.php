<?php
    require '../models/dao/questoesDAO.php';
    require '../models/classes/questoesClass.php';

    $perg = (int)$_POST["id"];
    $resp = $_POST["radio"];

    $quest = new Questoes();

    if($quest->verificaResposta($perg, $resp)) {
        if($perg != 4) {
            $location = "Location: ../pages/quiz.php?id=" . ($perg + 1);
            header($location);
        } else {
            $location = "Location: ../pages/vitoria.php";
            header($location);
        }
    } else {
        $location = "Location: ../pages/derrota.php";
        header($location);
    }
?>