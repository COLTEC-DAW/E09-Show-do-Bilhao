<?php
session_start();
    
$nome = $_POST['name'];
setcookie("nome", $nome);
function autenticar ($nome) {
 
  if (!isset($nome)) {
   echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=index.php'>";
    session_destroy();
    exit;
  } else {
      
    echo "<p>Olá, $nome.</p>";
 
  }
}
?>

<?php
    
    
    $_SESSION['name'] = $nome;
    autenticar($nome);

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
        <a href="historico.php">Ver histórico</a>
         <p> Clique no Silvio para começar </p>
         <br>
       <a href="perguntas.php?id=0"> <img src="silvio.jpg" height="500" width="450"> </a>


   </body>
</html>