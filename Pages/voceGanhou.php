<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Você ganhou</title>
    <link rel="stylesheet" href="../Styles/styles.css">
</head>
<body>
    <h1>Parabéns!</h1>
    <h2>Você acertou todas as 5 perguntas</h2>
    <?php
    echo "a";
    echo $_SESSION["user"];
    echo $_COOKIE["usuario-{$_SESSION["user"]}"];
    echo"<a href='http://localhost:8000/Services/destroiSessao.php'>Deseja fazer logout?</a>"
    ?>
</body>
</html>