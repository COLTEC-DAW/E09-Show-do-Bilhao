<?php
    require 'functions.inc';
    require_once 'classes.php';

    $usuarios = decodifica("users.json");

    if($usuarios == null){
        $usuarios = array();
    }
    $nome= $_POST["nome"];
    $email =  $_POST["email"];
    $login= $_POST["login"];
    $senha =  $_POST["senha"];

    $usuario = new Usuario($nome, $email, $login, $senha);

    if(UserRepetido($usuario->login, $usuarios, 'login')){
        echo "<h3>Este login já existem em nossos sistemas. Favor utilizar um login diferente!</h3>";
        echo "<form action=\"cadastro.php\" method=\"post\">";
        echo "<input type=\"submit\" value=\"Cadastrar\">";
        echo "</form>";
    }
    else{
        array_push($usuarios, $usuario);
        codifica($usuarios, "users.json");
        header("location: login.php");
    }
?>