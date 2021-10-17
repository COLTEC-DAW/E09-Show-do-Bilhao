<?php 
    

    $arquivo = fopen("./users.txt", "a+");

    if(!$arquivo){
        echo("ERRO NA ABERTURA DO ARQUIVO");
    }

    if (isset($_POST["nome"]) && isset($_POST["e-mail"]) && isset($_POST["login"]) && isset($_POST["senha"])){
        if((strlen($_POST["nome"])!= 0) && (strlen($_POST['e-mail']) != 0) && (strlen($_POST['login']) != 0) && (strlen($_POST['senha']) != 0)){
            $STRING = $_POST['nome'];
            $STRING = $STRING . ',' . $_POST['e-mail']. ',' . $_POST['login'] . ',' . $_POST['senha'] . ',' . "\n";
            echo($STRING);
    
            fwrite($arquivo, $STRING, strlen($STRING));
            //Se chegou aqui é porque correu tudo bem, e ele pode voltar para a pag de  login
            header("Location: ./login.php");

        }else{
            echo("ERRO: Você precisa digitar pelo menos uma letra para cadastrar<br>");
            echo("Digite seus dados novamente por favor:<br>");
        }
    }

    
    unset($_POST);
    fclose($arquivo);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>Página de Cadastro</h1>
    <div class="form">
        <form method="post">
            
            <label for="nome">Nome: </label>
            <input type="text" name="nome"><br><br>

            <label for="e-mail">E-mail: </label>
            <input type="email" name="e-mail"><br><br>

            <label for="login">Login: </label>
            <input type="text" name="login"><br><br>

            <label for="senha">Senha: </label>
            <input type="password" name="senha"><br><br>


            <input type="submit">
        </form>
    </div>
</body>
</html>