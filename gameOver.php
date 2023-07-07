<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameOver</title>
</head>

<body>
    <div>
        <h1>Não foi dessa vez :(</h1>

    <!-- <form action='login.php' method='POST'>
        <input type='submit' name='logOut' id='logOut' value='Sair'>
    </form> -->


        <form action="logout.php" method="post">
            <button type="submit">Logout</button>
        </form> 
        
        <form method="get" action="perguntas.php?">
            <button type="submit">Jogar novamente :)</button>
        </form>

        <!-- <div>
            <a href="logout.php">logout</a>
        </div> -->
        
    </div>
    <?php 
    
    ?>
</body>

</html>