<?php
    global $check;
    $id = $_POST['ident'];



    $fp = fopen("perguntas.json", "r");
    $info = file_get_contents("perguntas.json");
    $jsonObj = json_decode($info);


    if( $jsonObj[$id]->resposta == $_POST['alter']){  //resposta correta uhul uhul
        $id += 1; //passa para proxima pergunta
        fclose($fp);
        header("Location: perguntas.php?id=$id ");
    }

    else{
    header("Location: logout.php"); //php do final do jogo ou se errar
    fclose($fp);
    }


?>