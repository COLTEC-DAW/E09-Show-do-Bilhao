<?php

    $acabou = false;

    $perg = fopen('users.json','r');
    $tudo = "";
    while ($line = fgets($perg)) {
        $tudo = $tudo . $line;
    }
    $json = json_decode($tudo, true);
    fclose($perg);

    foreach($json as $obj){
        if($obj["user"] == $_POST["username"] && $obj["senha"] == $_POST["password"]){
            $acabou = true;
    
            session_start();        
            $_SESSION["login"] = $_POST["username"];
            $_SESSION["senha"] = $_POST["password"];

            header('location: http://localhost:3000?id=0');

        }
    }
    if($acabou == false){
        header('location: http://localhost:3000');
    }
?>