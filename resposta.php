<?php

    require_once "questions.inc";
    require_once "sessions.php";

   
    $id = $_POST["id"];
    $resposta = $_POST["resposta"];
    $option = $_POST["option"];
    $nextquestion = $id + 1;

    

    if ($option == $resposta) {

        $_SESSION["points"]++;

        if ($id >= 4) {
                
            defineCookies();
            header("Location: nice.php");

        } else {

            
            header("Location: questions.php?id=" . $id + 1);

        }

    } else {
        
        defineCookies();
        header("Location: wasted.php");

    }

?>

