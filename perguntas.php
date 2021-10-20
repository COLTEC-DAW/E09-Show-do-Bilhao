<?php 
    require "src/perguntas.inc"; 
    include "src/rodape.inc";
    include "src/menu.inc";
    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Show do Bilhão</title>
</head>
<body>
    <?php echo exibeMenu(); ?>
    <h1>Show do Bilhao - Perguntas</h1>
    
    <p>
        <?php echo carregaPergunta($id) ?>
        <?php echo exibeRodape(); ?>
    </p>
</body>
</html>

