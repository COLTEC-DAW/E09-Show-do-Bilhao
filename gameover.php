<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h1>Game Over meu amigo!</h1>
            <form method="get" action="logoff.php">
            <button type="submit">Logoff</button>
            </form>
            <form method="get" action="perguntas.php">
            <button type="submit">Jogar mais!!</button>
            </form>
        </div>
        <div>
            <?php 
                session_start();
                include "rodape.inc";
                if(isset($_COOKIE["nome"]) && isset($_COOKIE["pontos"])){
                    setcookie("nome", $_SESSION["login"], time()+3600);
                    setcookie("pontos", $_SESSION["pontos"], time()+3600);
                }
            ?>
        </div>
    </body>
</html>  