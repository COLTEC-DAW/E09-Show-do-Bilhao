<!DOCTYPE html>
<?php 
    require "perguntas.inc";
    include "menu.inc";
    if(isset($_GET["id"]) && isset($_POST["resposta"])) {
        $id = $_GET["id"];
        $resposta = htmlspecialchars($_POST["resposta"]) ;
    } else {
        $id = 0;
        $resposta = NULL;
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
    <h1>Show do Bilhão</h1>
    <form action="<?= verificaResposta($resposta, $id) ?>" method="POST">
        <?php carregaPergunta($id);?>
    </form>
    <?php include "rodape.inc";?>
</body>
</html>