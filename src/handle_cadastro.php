<?php
    require "User.php";
    function insert_into_json($nome_arquivo, $data){
        $old_data = json_decode(file_get_contents($nome_arquivo));
        if(!isset($old_data)) $data_to_append = $data;
        else $data_to_append = json_decode($data);
        array_push($data_to_append, $data);
        file_put_contents($nome_arquivo, json_encode($old_data, JSON_PRETTY_PRINT), LOCK_EX);
    }

    $user = new User($_POST["login"], $_POST["senha"], $_POST["email"], $_POST["nome"]);

    insert_into_json("usuarios.json", $user);

    header("Location: login.php", TRUE, 301);
?>
