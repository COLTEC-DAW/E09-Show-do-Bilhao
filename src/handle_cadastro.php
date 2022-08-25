<?php
    function insert_into_json($nome_arquivo, $data){
        $old_data = json_decode(file_get_contents($nome_arquivo));
        if(!isset($old_data)) $data_to_append = $data;
        else $data_to_append = json_decode($data);
        array_push($data_to_append, $data);
        file_put_contents($nome_arquivo, json_encode($old_data, JSON_PRETTY_PRINT), LOCK_EX);
    }

    $login_data = array(
        "nome" => $_POST["nome"],
        "email" => $_POST["email"],
        "senha" => $_POST["senha"],
        "login" => $_POST["login"],
    );

    insert_into_json("usuarios.json", $login_data);

    header("Location: login.php", TRUE, 301);
?>
