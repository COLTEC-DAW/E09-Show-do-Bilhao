<?php 
    include "Info\data.inc";
    include "Info\menu.inc"; 
    include "Info\perguntas.inc";
    include "Info\Rodape.inc"; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php echo Menu() ?>
    <?php echo carregaPergunta($_GET["id"]); ?>
    <?php echo Rodape()?>
</body>
</html> 