<?php
    $resposta = $_POST["resposta"];
    $id = $_POST["id"];


    $gab = fopen('gabarito.txt', 'r');
        $gabarito = array();
        while ($line = fgets($gab)) {
            array_push($gabarito, $gab);
        }
    fclose($gab);

    if($resposta == $gab[$id]){
        $id++;
        header('location: '."http://localhost:3000?id=".$id);
    }
    header('location: '."http://localhost:3000/gameover.php");
?>