<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="logout_ganhou.css">
    <title>PERDESTE OTARIO</title>
</head>
<body>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtIJpUnSZFDRhvsLZ3c7Vz0XDDvGBe4Qqmqg&usqp=CAU">
    <?php 
        $logout = "partials/logout.inc.php";
        if (is_readable($logout)) include $logout;
    ?>
    <a href="pagina_inicial.php"><button>Voltar para pagina inicial</button></a>
</body>
</html>