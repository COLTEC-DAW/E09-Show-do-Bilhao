<?php
    session_start();
    ob_start();

    $resposta = $_POST["resposta"];
    $id = $_POST["id"];
    $gabarito = $_POST["gabarito"];

    if($resposta == $gabarito){
        if($id == 4){
            setcookie("lastTime", date("d/m/Y h:i:s"));
            setcookie("lastScore", $id+1);

            session_destroy();
            header('location: '."http://localhost:3000/vitoria.php");
        } else {
            $id++;

            header('location: '."http://localhost:3000?id=".$id);
        }
    } else {
        setcookie("lastTime", date("d/m/Y h:i:s"));
   		setcookie("lastScore", $id);

        session_destroy();
        header('location: '."http://localhost:3000/gameover.php");
    }
?>