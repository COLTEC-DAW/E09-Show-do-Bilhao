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
    
        if (session_status() == PHP_SESSION_NONE) {
          session_start();
        }

        if (!isset($_SESSION["name"]) || !isset($_SESSION["verifica"])) {
            header("Location:cadastro.php");
        }
    ?>
    <?php 
     $arquivo_perguntas= 'perguntas.txt';
     if ( file_exists( $arquivo_perguntas)) {
        $abertura_arquivo_perguntas = fopen($arquivo_perguntas, "r");
        $ler_perguntas = fread($abertura_arquivo_perguntas,filesize($arquivo_perguntas) );
         $result= json_decode(file_get_contents("perguntas.txt"), true); ;
        fclose($abertura_arquivo_perguntas);
    }
     
    
      echo GetMenu();
      
      if(@$_GET['id']==5){
        header('Location:gameover.php?id=5'); 
     }
      if(@$_GET['id']!=0){
        
        $pontos=@$_GET['id'];
        $pontos=$pontos-1;
        $tmp= escolhePergunta(pegaID()-1,$result);
        $pontos=verifica_resposta($tmp,$pontos);
      }

    ?>  
    <h1>PAGINA DE PERGUNTAS</h1>
    
           <?php

            
                
                $id=pegaID();
            ?>    
                <h2>pergunta numero: <?php echo $id+1 ?> </h2>
            <?php    
                $tmp= escolhePergunta(pegaID(),$result);
                carregaPergunta($tmp,$id);                                                              
 
               
                
                                                                      
            ?>
            
    </div>
    <?php 
       echo getRodape();
    ?>     
</html> 