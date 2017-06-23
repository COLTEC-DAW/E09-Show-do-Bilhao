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

    if(UserRepetido($login, $usuarios, "login")){
        echo "<h3>Este login já existem em nossos sistemas. Favor utilizar um login diferente!</h3>";
        echo "<form action=\"cadastro.php\" method=\"post\">";
        echo "<input type=\"submit\" value=\"Cadastrar\">";
        echo "</form>";
    }
    else{
        $array = array('nome' => $nome, 'email' => $email, 'login' => $login, 'senha' => $senha);
        array_push($usuarios, $array);
        codifica($usuarios, "users.json");
        header("location: login.php");
    }
?>