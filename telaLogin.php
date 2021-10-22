<?php
    include "user.inc";
    /*
            Erro 2 -> Erro na autenticação do login
            Erro 3 -> Erro na autenticação de senha
    */
    //Só interfere quando a condição de erro na autenticação ocorre
    Erro();
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
        <h3>Olá, Seja bem vindo ao Show do Bilhão!</h3><br><br>
        Para jogar, por favor insira o seu login. Caso você já esteja cadastrado, será redirecionado para a página <br>
        de senha. Se a informação de senha estiver correta, você será redirecionado para página principal.<br><br>
        <strong>Caso você não tenha um CADASTRO, clique no link: </strong>
        <a href="http://localhost/DAW-E09/cadastro.php">CADASTRAR</a><br><br>
        <?php
            //'type' corresponde a um numero que sera passado para verificar se a chegada à página inicial foi feita por meio de login.
        ?>
        Para iniciar sessão, por favor insira o Login: <br><br>
        <form action="http://localhost/DAW-E09/checarLogin.php" method="post">
            <label for="userName">Login: </label>
            <input type="text" id="userName" name="login"><br><br>
            <input type = 'image' src = 'http://localhost/DAW-E09/Imagens/submitButtom.png' alt='Submit' style = 'max-width:48px; max-height:48px;'>
        </form>
        
    </div>
    <div>
        <?php
            echo "<br>";
            include "rodape.inc";
        ?>
    </div>
    
</body>
</html>