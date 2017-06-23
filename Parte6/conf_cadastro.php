<?php
    require "classes.php";
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $usuario = new User($nome, $email, $login, $senha);
    if(file_exists("users.json")){
        $dados = file_get_contents('users.json');

        $json = json_decode($dados);



        $json[] = array('nome'=>$usuario->$nome, 'email'=>$usuario->$email, 'login'=>$usuario->$login, 'senha'=>$usuario->$senha); //adiciona o login no array
        

        $dados_json = json_encode($json, JSON_PRETTY_PRINT);
        $arquivo = fopen("users.json", "w");
        fwrite($arquivo, $dados_json);
        fclose($arquivo);
    }

    header('Location: login.php');
?>