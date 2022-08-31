<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Show do Bilhão</title>
</head>
<body>
    <?php
    include "partials/menu.inc";
    ?>
    <div class="col16" id="logintext">
        <h2>CADASTRO</h2>
    </div>
    <div class="col6" id="loginbox">
        <form action='login.php' method='post'>
            <input type='text' placeholder='Nome' name='nome' class=col16></input>
            <input type='email' placeholder='E-mail' name='email' class=col16></input>
            <input type='text' placeholder='Usuário' name='user' class=col16></input>
            <input type='password' placeholder='Senha' name='senha' class=col16></input>
            <button type="submit">Enviar</button>
        </form>
    </div>   
    <style>#footer { position: absolute }</style>
    <?php 
    include "partials/rodape.inc";
    setcookie("falhaLogin");
    setcookie("mensagemErro");
    ?>
</body>
</html>