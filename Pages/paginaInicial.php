<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    require $path . "/Componentes/menu.inc";
    ?>
    
    <form  class="jogar" action="../Pages/Perguntas.php" method="get"> 
        <button type="submit" class="botaoJogar">Jogar</button>
    </form>
    <?php require $path . "/Componentes/rodape.inc";?>
</body>
</html>