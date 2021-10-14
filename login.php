<?php
    include "Info\menu.inc";
    include "Info\Rodape.inc";

    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Página de login</title>
    </head>
    <body>
        <?php echo Menu()?>
        <div class="formLogin">
            <form action="index.php" method="post">
                <fieldset>
                    <legend>Dados do jogador:</legend>
                        Nome de usuário: <input type="text" size="30" name="usuario"><br>
                        Email: <input type ="text" size="30" name="email"><br>
                        Senha: <input type="password" name="senha"><br>
                </fieldset>
                <input type="submit" value="Login">
            </form>
        </div>
        <?php echo Rodape()?>
    </body>
</html>