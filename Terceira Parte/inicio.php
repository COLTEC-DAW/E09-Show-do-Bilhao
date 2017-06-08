<?php
    session_start(); 
    $nome = $_POST['name'];
    $_SESSION['name'] = $nome;
    setcookie("name", $nome);
    echo "Seja bem vindo,";
    echo $nome;
      
?>


<!DOCTYPE html>
<html>
<head>
  <title>Jogo do Bilhão</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
   <body>
          <h1 id="tit"> 
            O melhor jogo do bilhão 
        </h1>
         <p> Clique no Silvio para começar </p>
         <br>
       <a href="perguntas.php?id=0"> <img src="silvio.jpg" height="500" width="450"> </a>


   </body>
</html>