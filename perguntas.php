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

        <div class="container">

            <form action="perguntas.php">

                <?php require "includes/perguntas.inc";

                    $id = $_GET["id"];

                    carregaPergunta($_GET["id"], FALSE);

                    $id++;

                    echo "<input type='hidden' name='id' value='$id'>";

                    echo "<button type='submit' class='button is-success'> Próxima </button>";

                ?>

            </form>

        </div>

        <!-- Rodapé -->
        <?php include "includes/rodape.inc"; ?>

    </body>

</html>
