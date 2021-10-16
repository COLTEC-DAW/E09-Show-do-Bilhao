<?php 
include "perguntas.inc";
    
    session_start();
    if (isset($_POST["nome"])){
        if(strlen($_POST["nome"])!= 0){
            $_SESSION["nome"] = $_POST["nome"];
            $_SESSION["id00"] = session_id();
            header("Location: ./perguntas.php");
        }else{
            echo("ERRO: Você precisa digitar pelo menos uma letra para logar<br>");
            echo("Digite seu login novamente por favor");
        }
    }


?>


<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Log-in</title>
    </head>

    <body>
        <form  method ="post">
            <label for="nome">Nome: </label>
            <input type="text" name="nome"><br>
            <input type="submit">
        </form>
    </body>
</html>