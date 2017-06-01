<html>
<head>
    <title>Jogo do Bilhão</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
  <body>

    <?php include 'menu.inc';?>
    <?php

    require 'perguntas.inc';
     for($i=0; $i<5; $i++) {
        echo $per[$i]; 
        echo "<br>";
          for($j=0; $j<4; $j++){
            echo $alt[$i][$j];
            echo "<br>";
          }
     }
     
     
    ?>
    <?php include 'rodape.inc';?>

  </body>
 
    
</html>