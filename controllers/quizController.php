<?php
    require '../models/dao/questoesDAO.php';
    require '../models/classes/questoesClass.php';
    require '../models/dao/usuariosDAO.php';
    require '../models/classes/usuariosClass.php';

    $user = $_COOKIE['usuario'];
    $perg = (int)$_POST["id"];
    $resp = $_POST["radio"];
    $quest = new Questoes();

    if($quest->verificaResposta($perg, $resp)) {
        if(!Usuarios::perdeu($user)) {
            Usuarios::atualizarPlacar($user, $perg+1);
        }
        if($perg != 4) {
            $location = "Location: ../pages/quiz.php?id=" . ($perg + 1);
            header($location);
        } else {
            $location = "Location: ../pages/vitoria.php";
            header($location);
        }
    } else {
        $location = "Location: loseController.php";
        header($location);
    }
?>