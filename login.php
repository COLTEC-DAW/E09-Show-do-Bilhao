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
        if (isset($_POST["login"])&& isset($_POST["senha"])&& isset($_POST["verifica"])){

            if (intval($_POST["verifica"]) == 4) {
                procura_usuario();
                if(procura_usuario()==true){
                    header('Location:perguntas.php?id=0');
                }else{
                    $valida=false;
                }
                
            } else {
                $valida = false;
                header('Location:erro.php');
            }
        }
    ?>
   
   
        
    <div class="body-text">  
        <h1>PAGINA DE LOGIN</h1>
        <br>
        <?php
         
         
            if ($valida == false) echo "<h3>Erro ao fazer login Tente novamente.</h3>";
            ?>
            <div class="form">
                <form method="post">
                    <p>login: </p>
                    <input type="text" name="login" tabindex="0"><br>
                    <p>senha: </p>
                    <input type="text" name="senha" tabindex="0"><br>
                    <p>quanto é 16/4: </p>
                    <input type="number" name="verifica" tabindex="0"><br>
                    <button>Enviar</button>
                </form>
                <h1>ainda não tem um login? faca o cadastro!</h1>
                <a href="cadastro.php"><button>Pagina⠀de⠀cadastro</button></a>
            </div>
    </div>
        <?php 
       echo getRodape();
    ?>     
</html> 