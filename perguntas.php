<?php 
    // Inclusão dos dados das pergunstas.
    include "Lib\Data.inc";
    // Inclusão do menu superior..
    include "Lib\Menu.inc"; 
    // Inclusão do footer.
    include "Lib\\rodape.inc";
    // Inclusão do método de formatação da pergunta.
    include "Lib\perguntas.inc";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas</title>

    <!-- Estilo do jogo -->
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <!-- Parte superior -->
    <?php echo GetMenu() ?>

    <!-- Exibe uma pergunta  --> 
    <?php echo carregaPergunta($_GET["id"]); ?>
    <!-- Parte inferior -->
   <?php echo GetFooter() ?>
</body>
</html>