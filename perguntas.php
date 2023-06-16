<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta</title>
    <link rel="stylesheet" href="Styles/styles.css">
</head>
<body>
    <?php require "dadosPerguntas.inc";?>
    <?php 
        $id= htmlspecialchars($_GET["id"]);
        $idPergunta=$id+1;
        $pergunta=carregaPerguntas($id);
        require "Components/pergunta.inc";
    ?>
    
</body>
</html>