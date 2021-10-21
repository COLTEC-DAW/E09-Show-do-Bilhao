<?php

    require_once "questions.inc";

   
    $id = $_POST["id"];
    $resposta = $_POST["resposta"];
    $option = $_POST["option"];
    $nextquestion = $id + 1;

    

    if ($option == $resposta) {
        
        if ($id >= 4) {
                
            header("Location: nice.php");

        } else {

            header("Location: questions.php?id=" . $id + 1);

        }

    } else {
        
        header("Location: wasted.php");

    }

?>

