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

            <form action="index.php" method="GET">

                <?php require 'includes/perguntas.inc';
                    if ($_GET["id"] == null) {
                        echo "<h1 class='title'> Bem vindo ao Show do Bilhão </h1>";
                        echo "<p class='subtitle'> Responda a várias perguntas e concorra a 1 Bilhão de Bitcoins! (ou não) </p>";
                        $tag = '<a class="button is-success is-pulled-left" href="index.php?';
                        echo $tag . str_replace("0",$_GET['id']+0,'id=0"') . '>Começar</a>' . '</br>';
                    } else {
                        if($_GET["id"] < 5) {
                            carregaPergunta($_GET["id"]);
                            $tag = '<a class="button is-success is-pulled-right" href="index.php?';
                            echo $tag . str_replace("0",$_GET['id']+1,'id=0"') . '>Continuar</a>' . '</br>';
                        } else
                            echo '<p>Jogo Terminado.</p>';
                    }
                ?>

            </form>

        </div>

        <!-- Rodapé -->
        <?php include "includes/rodape.inc"; ?>

    </body>
</html>