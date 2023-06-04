<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prates</title>
</head>
<body>

    <?php 
        include "menu.inc";
    ?>

    <form action="exibirPergunta.php" method="get">
    ID:<input type="text" name="id">
    <button type="submit">Enviar</button>
    </form>

    <?php 
        include "rodape.inc";
    ?>

</body>
</html>


