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
        <?php 
        if (isset($_GET["$id"])) {
               if ($_GET["$id"] == 1) {
                   echo "<h3>Login ou senha incorretos</h3>";
               }
        }
        else {
            echo "<h1>Bem vindo ao Show do Bilhão</h1>";
        }
        ?>

        <form action="login.php" method="post">
            Login <input type="text" name="login" id="login" ><br>
            Senha <input type="password" name="senha" id="senha" ><br>
            <input type="submit" name="logar" value="Entrar">
            <input type="submit" name="registrar" value="Cadastrar">
        </form>

        
    </div>
    
    </body>
    </html>
</html>