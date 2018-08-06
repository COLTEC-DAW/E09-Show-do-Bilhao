<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/bulma.min.css">
        <title>Show do Bilhão - 2018</title>
    </head>

    <body>
        
        <!-- Menu -->
        <?php include "includes/topbar.inc"; ?>

        <div class="container has-text-centered" style="margin-top: 70px">

            <form action="perguntas.php" method="POST">

                <h1 class='title'> Bem vindo ao Show do Bilhão! </h1>
                <p class='subtitle'> Responda a várias perguntas e concorra a 1 Bilhão de Bitcoins! (ou não) </p>
                
                <button class="button is-success is-size-4" style="margin-top: 30px" type="submit">Começar</button>
                <input type="hidden" name="id" value="0">

            </form>

        </div>

        <!-- Rodapé -->
        <?php include "includes/rodape.inc"; ?>

    </body>

</html>
