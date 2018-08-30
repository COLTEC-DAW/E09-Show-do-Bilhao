<?php
    $id = $_POST["id"];
    $alternativa = $_POST["optradio"];
    

    require "file.php";
    $gabarito = controlegabarito($id);

    if(($id < 4) and ($alternativa == $gabarito)){
        $id++;
        header("Location: http://localhost:3000/index.php/?id=$id");
        exit;
    }
    elseif($alternativa != $gabarito){
        header("Location: http://localhost:3000/gameover.php/?id=$id");
        exit;
    }
    exit;
?>