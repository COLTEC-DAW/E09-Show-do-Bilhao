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
        <?php include "menu.inc"; ?>
    </div>

    <div>
        <img src="http://localhost/DAW-E09/Imagens/YouWon.jpg" alt="Você Ganhou">
    </div>

    <div>
        <h3>"WE ARE THE CHAMPIONS, MY FRIENDS AND WE'LL KEEP ON FIGHTING TILL THE END !!!!!"<br>
        VOCÊ GANHOUUUUUUUUUU !!! PARABÉNS !!!!</h3><br><br>
    </div>
    <div>
        <?php
            echo "Caso você deseje jogar novamente, clique no link a seguir: <a href='http://localhost/DAW-E09/telaInicio.php?place=1'>Jogar Novamente</a>";
        ?>
           <br><br>
            Caso queira fazer logout de sua sessão, clique no link a seguir: <a href="http://localhost/DAW-E09/logout.php">Logout</a>
        </div>

    <div>
        <?php include "rodape.inc"; ?>
    </div>
</body>
</html>