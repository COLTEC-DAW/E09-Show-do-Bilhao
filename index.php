<!DOCTYPE html>
<?php 
    require "perguntas.inc";
    
    if(isset($_GET["id"])) {
        $id = $_GET["id"];
    } else {
        $id = 0;
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>

<body>
    <?php include "menu.inc"; ?>

    <h1>Show do Bilhão</h1>
    <form action="index.php?id=<?= $id+1 ?>" method="POST">
        <?php verificaResposta($id);?>
    </form>
    
    <?php include "rodape.inc";?>
</body>
</html>