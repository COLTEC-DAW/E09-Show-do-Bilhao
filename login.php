<?php 
include "perguntas.inc";

$arquivo = fopen("./users.txt", "r");

function checacadastro($arquivo, $login, $senha){
    $i = 0;
    while(!feof($arquivo)){

        $linha = fgets($arquivo);
        $dados = explode(",", $linha);
        echo('<br>');
        $copialogin = $dados[2];
        $copiasenha = $dados[3];

        
        //Verifica se existe esse login no cadastro
        if(strcmp($copialogin, $login)==0){
            //Verifica se a senha bate com a senha de cadastro
            if(strcmp($copiasenha, $senha) == 0){
                //Se sim, retorna 0 indicando que o usuário existe
                return 0;
            }else{
                //mesmo login senha diferentes, por enquanto não levanta um erro
            }
        }
        $i++;
    }

    //Se chegou até aqui é porque a senha ou o login não batem, retorna -1 indicando erro
    return -1;
}

session_start();

if (isset($_POST["nome"])){


    if(strlen($_POST["nome"])!= 0){
        if(checacadastro($arquivo, $_POST['nome'], $_POST['senha']) == 0){
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

fclose($arquivo);
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
            <label for="senha">Senha: </label>
            <input type="password" name="senha"><br>
            <input type="submit"><br><br>
            <button><a href="./cadastro.php">Novo Cadastro</a></button>
        </form>
    </body>
</html>