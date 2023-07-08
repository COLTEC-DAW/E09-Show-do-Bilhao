<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameOver</title>
</head>

<body>
    
    <div>
        <h1>Game Over!!</h1>

        <div>
            <?php 

                $pontuacao = $_GET['pontuacao'];
                
                setcookie('Pontuacao', $pontuacao);
                setcookie('ultima_acesso', date('d/m/Y H:i:s'));
                
                echo "<p>Não foi dessa vez :( </p>";
                echo "<br>";
                echo "<p>Número de acertos: </p>" . $pontuacao;
                echo "<br>";
                echo "<p>Data e Horário: </p>" . $_COOKIE['ultima_acesso'];

            ?>
        </div>

        <form action="logout.php" method="post">
            <button type="submit">Logout</button>
        </form> 
        
        <form method="get" action="perguntas.php?">
            <button type="submit">Jogar novamente :)</button>
        </form>
        
    </div> 

    <?php include("rodape.inc");?>
    
</body>

</html>