<?php
    $file = "../data/questoes.json";
    $json = file_get_contents($file);
    $data = json_decode($json);

    $perg = $_POST["id"];
    $resp = $_POST["radio"];

    $desejada = $data->{'respostas'}[(int)$perg];
    if($resp == $desejada) {
        if((int)$perg != 4) {
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