<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    session_destroy();
    echo "LOG-OUT COM SUCESSO";
?>   

<br><br>
    <a href="login.php"><button>Voltar para a página inicial.</button></a>

</body>
</html>