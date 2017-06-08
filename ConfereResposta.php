<?php
    global $check;
    $id = $_POST['ident'];
    $check = $_POST['resp'];

    if($check==$_POST['alter']){
        $id += 1;
        header("Location: perguntas.php?id=$id ");
    }
    else{
        header("Location: Errou.php"); //php do final do jogo ou se errar
    }
    echo $_POST['alter'];


?>