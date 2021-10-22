<?php
    $login = $_GET["userLogin"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <div>
        <?php
            include "menu.inc";
        ?>
    </div>
    <div>
        Digite a senha por favor: <br><br>
        <form action="http://localhost/DAW-E09/checarSenha.php" method="post">
            <label for="Senha">Senha: </label>
            <input type="password" id="Senha" name="senha"><br>
            <input type = 'image' src = 'http://localhost/DAW-E09/Imagens/submitButtom.png' alt='Submit' style = 'max-width:48px; max-height:48px;'>
            <?php
                echo "<input type='hidden' name='login' value = ".$login.">";
            ?>
            
        </form>
    </div>
    <div>
        <?php
            echo "<br>";
            include "rodape.inc";
        ?>
    </div>
</body>
</html>