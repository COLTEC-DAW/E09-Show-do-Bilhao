<?php include "menu.inc";?> 
<?php include "rodape.inc";?>   
<?php require "perguntas.inc";?>  
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

        
    <div class="body-text">  
    <?php 
      echo GetMenu();
      
    ?>  
        <?php
    
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }

    if (!isset($_SESSION["name"]) || !isset($_SESSION["verifica"])) {
        header("Location:cadastro.php");
    }
?>
     <h1>PERFIL DE JOGADOR</h1>
     <br>
     <h2>Informações do jogador</h2>
     <h3>nome: <?= $_SESSION["name"] ?></h3>
     <h3>email: <?= $_SESSION["email"] ?></h3>
     <h3>login: <?= $_SESSION["login"] ?></h3>
     <h3>senha: <?= $_SESSION["senha"] ?></h3>
     <?php
     
    if (isset($_COOKIE["lastScore" . $_SESSION["login"]]) && isset($_COOKIE["lastGame" . $_SESSION["login"]])) { 
        ?>
        <h2>Informações do último jogo</h2>
        <h3>Data: <?= $_COOKIE["lastGame" . $_SESSION["login"]] ?></h3>
        <h3>Pontuação: <?= $_COOKIE["lastScore" . $_SESSION["login"]] ?></h3>
    <?php }else{
                echo '<h3>Este perfil ainda não jogou nenhuma partida</h3>';
                } 
    ?>
    </div>
    </div>
        <?php 
       echo getRodape();
    ?>     

</html> 