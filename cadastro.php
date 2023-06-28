
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show dos Otakus</title>

        <link rel="stylesheet" href="reset.css">
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php include "menu.inc"?>

        <main style="flex-direction:column">
            <h2>cadastro</h2>
          
            
            <form method="post" action="index.php">

                <label for="usuario">Nome:</label>
                <input type="text" name="nome" required><br>
                <label for="senha">Email:</label>
                <input type="password" name="email" required><br>
                <label for="senha">Login:</label>
                <input type="password" name="login" required><br>
                <label for="senha">Senha:</label>
                <input type="password" name="senha" required><br>
                <input type="submit" value="Cadastrar">

            </form>
            
        
        </main>

        <?php include "rodape.inc"?>
    </body>

</html>