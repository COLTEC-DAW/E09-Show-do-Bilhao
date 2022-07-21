

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!--CSS-->
  <link rel="stylesheet" href="style.css"/>

  <title>Show do Bilhão</title>
</head>
<body>
  

  <?php

    $titulo = "titulo.inc";
    $jogo = "perguntas.inc";
    $rodape = "rodape.inc";

    //Titulo
    include $titulo;

    //Jogo
    include $jogo;

    //Rodape
    include $rodape;

  ?>


</body>
</html>