
<?php include "rodape.inc";?>   
<?php require "login.inc";?>   
<!DOCTYPE html>
    <!--Guilherme Rodrigues Souza Macieira-->
<html lang="pt-br" dir="ltr">
    <head>
        <link rel="stylesheet" type="text/css" href="styles.css">
        <meta charset="utf-8">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Show do bilhão </title>
    </head>
    <?php
        
        session_start();
        $valida = true;
        if (isset($_POST["name"]) && isset($_POST["email"])&& isset($_POST["login"])&& isset($_POST["senha"])&& isset($_POST["verifica"])){
            $_SESSION["name"] = $_POST["name"];
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["login"] = $_POST["login"];
            $_SESSION["senha"] = $_POST["senha"];
            $_SESSION["verifica"] = $_POST["verifica"];
            $_SESSION["tag"] = session_id();

            if (intval($_SESSION["verifica"]) == 4) {
                escreve_usuario();
                header('Location:perguntas.php?id=0');
            } else {
                $valida = false;
                header('Location:erro.php');
            }
        }
    ?>
   
        
    <div class="body-text">  
    <h1>PAGINA DE CADASTRO</h1>
     <br>
 
    <?php
        if ($valida == false) echo "<h3>Erro ao fazer login Tente novamente.</h3>";
        ?>
        <div class="form">
            <form method="post">
                <p>nome: </p>
                <input type="text" name="name" tabindex="0"><br>
                <p>email: </p>
                <input type="text" name="email" tabindex="0"><br>
                <p>login: </p>
                <input type="text" name="login" tabindex="0"><br>
                <p>senha: </p>
                <input type="text" name="senha" tabindex="0"><br>
                <p>quanto é 16/4: </p>
                <input type="number" name="verifica" tabindex="0"><br>
                <button>Enviar</button>
            </form>
            <h1>já tem um cadastro? faca o login!</h1>
            <a href="login.php"><button>Pagina⠀de⠀login</button></a>
        </div>
        </div>
        <?php 
       echo getRodape();
    ?>     
</html> 