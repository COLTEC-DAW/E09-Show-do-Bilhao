<?php
    session_start();
  
    if(isset($_POST["nome"]) && isset($_POST["email"])){
        require "./funcaoLogin.php";
        cadastroUsuario($_POST["nome"],$_POST["email"],$_POST["login"],$_POST["senha"]);
        header("Location: ../index.php");
        
    }else if(isset($_POST["login"]) && isset($_POST["senha"])){
        require "./funcaoLogin.php";
        $login=conferirLogin($_POST["login"], $_POST["senha"]);
        if($login==false){
            ?><p>Senha ou Login incorretos</p><?php
            header("Location: ../index.php");
        } else{
            $_SESSION["login"]=$_POST["login"];
            $_SESSION["senha"]=$_POST["senha"];
            header("Location: ../index.php");
        }
    }
?>