<?php include "menu.inc";?> 
<?php include "rodape.inc";?>   
<?php include "perguntas.inc";?> 
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
      $valor=pegaID();
      if ($valor<4){
        echo '<h1>VOCE PERDEU</h1>';
        echo '<h1>SUA PONTUAÇÃO FOI:'.$valor.'</h1>';
      }else{
        echo '<h1>PARABENS, VOCÊ GANHOU!</h1>';
        echo '<h1>SUA PONTUAÇÃO FOI:'.$valor.'</h1>';
      }
      
    ?>  

    </div>
        <?php 
       echo getRodape();
    ?>     
</html> 