<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>Show do Bilhão</title>
</head>
<body>
    <?php
    setcookie("premiacao");
    setcookie("time");
    include "partials/menu.inc";
    echo '<div class="col16" id="logintext">';
    echo '<h2>LOGIN</h2>';
    echo "</div>";
    echo '<div class="col6" id="loginbox">';
        echo "<form action='showdobilhao.php?id=0' method='post'>";
        echo "<input type='text' placeholder='Usuário' name='user' class=col16></input>";
        echo "<input type='password' placeholder='Senha' name='senha' class=col16></input>";
        echo '<button type="submit">Enviar</button>';
        echo "</form>";
    echo "</div>";   
    echo "<style>#footer { position: absolute }</style>"; 
    include "partials/rodape.inc";
    ?>
</body>
</html>