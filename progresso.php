<?php 

    require "questao.php";
    session_start();
    $id = $_POST["id"];
    $alternativas = $_POST["escolha"];
    $gabarito = $_POST["resposta"];

    $dadosJson = file_get_contents('questoes.json');
    $dadosJsonDecode = json_decode($dadosJson, true);

    if ($alternativas == $gabarito) {
        $_SESSION['pontuacao']++;
        if (($id + 1) == count($dadosJsonDecode[$id]["alternativas"])) {
            header("Location: zerou.php");
        }
        else {
            header("Location: perguntas.php?id=". $id + 1);
        }
    }
    else {
        header("Location: gameOver.php");
    }
    
    ?>