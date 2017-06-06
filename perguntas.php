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
        <?php include 'menu.inc';?>
      </div>
      <div id="pergunta">
          <?php 
            require'perguntas.inc';
            if($_GET["id"]<5){
                carregaPergunta($_GET["id"]);
                $ru = $_POST['alternativa'];
                if($ru == $respostas[$_GET["id"]]){
                  echo 'ACERTOU !';
                  $proxID = $_GET["id"]+1;
                  $link = "perguntas.php?id=".$proxID;
                  echo '<a class="btn btn-primary" href="'.$link.'">Próxima</a>';
                  //echo 'ok';
                }
                else{
                  echo 'ERROU';
                  echo '<a class="btn btn-primary" href="gameover.php">Que Pena :(</a>';
                  //echo 'não';
                }
                
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