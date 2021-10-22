<?php
    if(isset($_GET["code"]))
    {
        if($_GET["code"] == 1)
        {
            echo "<script>alert('EMAIL INVÁLIDO, por favor recomeçe o cadastro')</script>";
        }
        else if($_GET["code"] == 2)
        {
            echo "<script>alert('LOGIN JÁ EXISTENTE, por favor recomeçe o cadastro')</script>";
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <div>
        <?php
            include "menu.inc";
        ?>
    </div>
    <div>
        <h3>Seja bem vindo ao CADASTRO Show do Bilhão!</h3><br>
        Por favor, para realizar o cadsatro, insira seus dados:
        <form action="http://localhost/DAW-E09/realizarCadastro.php" method="post">
                <label for="Name">Nome: </label>
                <input type="text" id="Name" name="nome"><br>
                <label for="Email">Email: </label>
                <input type="text" id="Email" name="email"><br>
                <label for="Login">Login: </label>
                <input type="text" id="Login" name="login"><br>
                <label for="Senha">Senha: </label>
                <input type="password" id="Senha" name="senha"><br>
                <input type = 'image' src = 'http://localhost/DAW-E09/Imagens/submitButtom.png' alt='Submit' style = 'max-width:48px; max-height:48px;'>
        </form>
        <br><br>
        *Lembre-se* -- Você será REDIRECIONADO para o LOGIN após efetuado o cadastro. <br>
        <strong>Informações inseridas INCORRETAMENTE (login já existente por exemplo) poderão ocasionar em ERRO DE CADASTRO.</strong> <br>
        <strong>Ponha um email válido, senão retornará erro.</strong>
        <br><br>
        Se desejar retornar para a tela de Login, clique no link: <a href="./telaLogin.php">Login</a>
    </div>
    <div>
        <?php
            echo "<br>";
            include "rodape.inc";
        ?>
    </div>
</body>
</html>