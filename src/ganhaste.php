<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GANHOU</title>
</head>
<body>
    <img src="Assets/ganhou.png">
    <?php 
        $logout = "partials/logout.inc.php";
        if (is_readable($logout)) include $logout;
    ?>
    <a href="pagina_inicial.php"><button>Voltar para pagina inicial</button></a>
</body>
</html>