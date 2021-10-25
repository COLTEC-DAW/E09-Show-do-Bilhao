 <?php 
    require "perguntas.inc";
    // array com os enunciados
    $id = $_GET["id"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANIME QUIZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php include "menu.inc" ?>
        <div class="row">
            <h2 class="col">Pergunta <?php $numeroPergunta = $id + 1; echo "$numeroPergunta:" ?> </h2>
            <div class="container">
                <?php
                    echo $carregaPergunta($id);
                ?>
            </div>
        </div>
        <footer>
            <?php include "rodape.inc"?>
        </footer>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>