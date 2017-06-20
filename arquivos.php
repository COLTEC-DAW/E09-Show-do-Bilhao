<?php
    require 'functions.inc';

    $usuarios = decodifica("users.json");

    if($usuarios == null){
        $usuarios = array();
    }
    $nome= $_POST["nome"];
    $email =  $_POST["email"];
    $login= $_POST["login"];
    $senha =  $_POST["senha"];

    $array = array('nome' => $nome, 'email' => $email, 'login' => $login, 'senha' => $senha);
    array_push($usuarios, $array);
    codifica($usuarios, "users.json");
?>