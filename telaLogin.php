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
        <h3>Olá, Seja bem vindo ao Show do Bilhão!</h3><br><br>
        Para jogar, por favor insira o seu nome a seguir para iniciar uma sessão. <br><br>
        <?php
            //'type' corresponde a um numero que sera passado para verificar se a chegada à página inicial foi feita por meio de login.
        ?>
        <form action="http://localhost/DAW-E09/telaInicio.php" method="post">
            <label for="userName">Nome: </label>
            <input type="text" id="userName" name="user"><br><br>
            <input type = 'image' src = 'http://localhost/DAW-E09/Imagens/submitButtom.png' alt='Submit' style = 'max-width:48px; max-height:48px;'>
            <input type = 'hidden' id = 'qualPagina' name = 'type' value = 0>
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