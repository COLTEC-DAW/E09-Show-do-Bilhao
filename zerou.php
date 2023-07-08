<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FIM</title>
    </head>
    <body>
        <div>
            <h1>Você é o novo bilionário</h1>

            <?php 

            session_start();
            $pontuacao = $_GET['pontuacao'];

            setcookie('ultima_pontuacao', $pontuacao);
            setcookie('ultima_acesso', date('d-m-Y H:i:s'));


            echo "<p>Parabens!!</p>";
            echo "<br>";
            echo "<p>Número de acertos: </p>" . $pontuacao;
            echo "<br>";
            echo "<p>Data e Horário: </p>". $_COOKIE['ultima_acesso'];

            ?>

            <form action="logout.php">
            <button type="submit"><p>Logout</p></button>
            </form>
            <form method="get" action="perguntas.php">
            <button type="submit"><p>Jogar novamente :)</p></button>
            </form>
        </div>

        <?php include("rodape.inc");?>

    </body>
</html>