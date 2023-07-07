<?php
session_start();
    require "./funcaoLogin.php";
    

    if(isset($_POST["nome"]) && isset($_POST["email"])){
        cadastroUsuario($_POST["nome"],$_POST["email"],$_POST["login"],$_POST["senha"]);
        $_SESSION["login"]=$_POST["login"];
        $_SESSION["senha"]=$_POST["senha"];
        
    }else if(isset($_POST["login"]) && isset($_POST["senha"])){
        $login=conferirLogin($_POST["login"], $_POST["senha"]);
        if($login==false){
            ?><p>Senha ou Login incorretos</p><?php
            header("Location: ../index.php");
        } else{
            $_SESSION["login"]=$_POST["login"];
            $_SESSION["senha"]=$_POST["senha"];

        }
    }
    header("Location: ../index.php");

?>