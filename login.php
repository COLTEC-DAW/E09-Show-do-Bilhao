<?php 
    // Inclusão do menu superior.
    include "Lib\\Menu.inc"; 
    // Inclusão do footer.
    include "Lib\\rodape.inc";

    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

    <!-- Estilo do jogo -->
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!-- Parte superior -->
    <?php echo GetMenu() ?>

    <!-- Forms -->
    <div class="LoginForm">
        <form action="index.php" method="post">
            <fieldset>
                <legend>Dados do jogador:</legend>
                    Username:       <input type="text" size="30" name="username"><br>
                    E-mail:&#160;&#160;&#160;&#160;&#160;&#160;         <input type="text" size="30" name="email"><br>
                    Password:       <input type="password" name="password"> <br>
                </fieldset>
            <input type="submit" value="Login">
        </form>
    </div>

    <!-- Parte inferior -->   
    <?php echo GetFooter() ?>
</body>
</html>