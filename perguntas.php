<?php ob_start(); ?>
<html>
<head>
    <title>Jogo do Bilhão</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<audio autoplay="true" src="pergunta.wav"></audio>
  <body>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div id="topo">
        
        <?php include 'menu.inc';?>
      </div>
      <div id="pergunta">
          <?php
            session_start(); 
            require'perguntas.inc';
            if($_SESSION['usuario'] != null){
              if($_GET["id"]== 0){
                carregaPergunta($_GET["id"]);
                setcookie("pontos",0);
              }
              else{
                carregaPergunta($_GET["id"]);
              }
            }
            else{
              header("location:index.php");
            }
          ?>
      </div>
    </div>
    <div class="col-md-12">
      <div id=rodape>
        <?php include 'rodape.inc';?>
      </div>
    </div>
  </div>
</div>
  </body>    
</html>