<?php 
require "perguntas.inc";
require "questao.php";
?>

<!DOCTYPE html>
<html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show do Bilhão</title>
    </head>
    <body>

    <div>
        <?php ?>
        <h1>Show do Bilhão</h1>
        <form method="POST" action="login.php">
        <fieldset>
            <p>
                <label> Login </label>
            </p>
            <input type="text" name="login" id="login" value="">
            <p>
                <label> Senha </label>
            </p>
            <input type="password" name="senha" id="senha" value="">
            <br>
            <br>
            <input type="submit" name="logar" value="Login">
            <input type="submit" name="registrar" value="Resgistrar">

        </fieldset>
    </form>
        
    </div>
    
    </body>
    </html>
</html>