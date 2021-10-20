<?php 

include "perguntas.inc";
include "User.php";

//Usuário de teste que serve apenas para checar o cadastro e não é salvo no arquivo
$usert = new User('teste', 'teste', 'teste', 'teste');


//session_start();

if (isset($_POST["nome"])){


    if(strlen($_POST["nome"])!= 0){
        //Se o usuário digitou ao menos um caracter checa se existe este usuário no cadastro e se 
        //a senha está correta
        if($usert->checacadastro($_POST['nome'], $_POST['senha']) == 0){
            $_SESSION["nome"] = $_POST["nome"];
            $_SESSION["id00"] = session_id();
            header("Location: ./perguntas.php");
        }else{
            echo("ERRO: USUÁRIO NÃO ENCONTRADO OU SENHA ERRADA.");
        }
    }else{
        echo("ERRO: Você precisa digitar pelo menos uma letra para logar<br>");
        echo("Digite seu login novamente por favor:");
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
            <label for="nome">Login: </label>
            <input type="text" name="nome"><br>
            <label for="senha">Senha: </label>
            <input type="password" name="senha"><br>
            <input type="submit"><br><br>
            <button><a href="./cadastro.php">Novo Cadastro</a></button>
        </form>
    </body>
</html>