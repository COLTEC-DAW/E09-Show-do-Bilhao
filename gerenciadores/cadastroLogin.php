<?php
    require "./funcaoLogin.php";
    if(isset($_POST["nome"]) && isset($_POST["email"])){
        echo "chegou aqui";
        cadastroUsuario($_POST["nome"],$_POST["email"],$_POST["login"],$_POST["senha"]);
        
    }else if(isset($_POST["login"]) && isset($_POST["senha"])){
        echo "chegou aqui tambem";
        $login=conferirLogin($_POST["login"], $_POST["senha"]);
        if($login==false){
            
        }
    }
    $_SESSION["login"]=$_POST["login"];
    $_SESSION["senha"]=$_POST["senha"];
    require "../index.php";

?>