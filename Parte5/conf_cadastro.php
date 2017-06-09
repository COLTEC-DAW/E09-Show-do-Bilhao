<?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    if(file_exists("users.json")){
        $dados = file_get_contents('users.json');

        $json = json_decode($dados);



        $json[] = array('nome'=>$nome, 'email'=>$email, 'login'=>$login, 'senha'=>$senha); //adiciona o login no array
        

        $dados_json = json_encode($json);
        $arquivo = fopen("users.json", "w");
        fwrite($arquivo, $dados_json);
        fclose($arquivo);
    }

    header('Location: login.php');
?>