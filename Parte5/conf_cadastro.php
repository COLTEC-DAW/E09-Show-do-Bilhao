<?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    $arquivo = fopen("users.txt", "a");
    -$array = '{"Nome":"'.$nome.'", "Email":"'.$email.'","Login":"'.$login.'","Senha":"'.$senha.'"}';
    fwrite($arquivo, $array."\n");

    header('Location: login.php');
?>