<?php
 $nome = $_COOKIE['nome']; 
 autenticar($nome);
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

        echo "FINAL DO JOGO ";

?>

<html>
    <head>
    </head>
    <body>
        <br>
        <a href="historico.php">Ver histórico</a>
    </body>
</html>
