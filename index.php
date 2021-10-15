<?php 
    $now = time();
?>

<!DOCTYPE html>

<html>


    <head>
        <title>Show do Bilhão</title>
        <meta charset="UTF-8">
        <meta http-equiv="X UA-Compatible" content="IE=edge">

    </head>

    <body>

        <p>
            <?php echo "<h1>Bem vindo ao show do Bilhão</h1>"; ?>
            <?php echo ("Clique no link abaixo para começar o jogo");?>
            <?php $jogo = '<div>
                <a href="http://localhost/hello-php/perguntas.php?id=1" >Ínicio</a> 
            </div>';?>
            <?php echo($jogo);?>
        </p>
    </body>

</html>