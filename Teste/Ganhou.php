<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ganhou</title>
    </head>
    <body>
        <img src="Ganhou.jpg">
        <?php 
            $logout = "Sair.inc.php";
            if (is_readable($logout)) include $logout;
        ?>
        <a href="Index.php"><button>Voltar para pagina inicial</button></a>
    </body>
</html>