<?php ob_start(); ?>
<html>
<head>
    <title>Jogo do Bilhão</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
  <body>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div id="topo">
         <a href="sair.php">Sair</a>
        <?php include 'menu.inc';?>
      </div>
      <div id="comeco">
        <?php 
          session_start();
          echo "<h3>Bem vindo {$_SESSION['usuario']}!</h3>";
          echo "<br>";         
          $pontos = $_COOKIE["pontos"];
          $data = $_COOKIE["data"];
          echo 'Ultima pontuação: '.$pontos.'<br>';
          echo 'Ultima vez que jogou: '.$data.'<br>';  
        ?>
        <button type="button" class="btn btn-primary" onclick="location.href = 'perguntas.php?id=0' ;">INICIAR O JOGO</button>
      </div>
    </div>
  </div>
</div>
<div class="col-md-12">
      <div id=rodape>
        <?php include 'rodape.inc';?>
      </div>
    </div>
  </body>    
</html>