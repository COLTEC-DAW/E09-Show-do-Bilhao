<!DOCTYPE html>
<html lang="en">
    <?php $path = $_SERVER['DOCUMENT_ROOT'];?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
    <link rel="stylesheet" href="/frontend/Styles/styles.css">
</head>
<body>
    <section class="mainPaginaInicial">
        <?php 
        $path = $_SERVER['DOCUMENT_ROOT'];
        require $path . "/frontend/Componentes/menu.inc";
        ?>
        
        <form  class="jogar" action="../../frontend/Pages/Perguntas.php" method="get"> 
            <button type="submit" class="botaoJogar">Jogar</button>
        </form>
        <?php require $path . "/frontend/Componentes/rodape.inc";?>

    </section>
</body>
</html>