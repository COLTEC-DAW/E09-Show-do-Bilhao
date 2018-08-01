<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/bulma.min.css">
        <title>Show do Bilhão - Prova de conceito</title>
    </head>

    <body>

        <!-- Menu -->
        <?php include "includes/topbar.inc"; ?>

        <div class="content">

            <div class="container">

                <h1 class="title has-text-centered is-2"> Prova de conceitos </h1> <br>

                <?php require "includes/perguntas.inc";

                    for ($i = 0; $i < 5; $i++) {
                        carregaPergunta($i,TRUE);
                    }

                ?>

                <a class="button is-success">Enviar</a>

            </div>

        </div>

    </body>
</html>