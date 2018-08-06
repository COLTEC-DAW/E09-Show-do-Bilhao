<!DOCTYPE html>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Style CSS -->
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/bulma.min.css">
        
        <title>Show do Bilhão - 2018</title>
    </head>

    <body>
        
        <!-- Menu -->
        <?php include "includes/topbar.inc"; ?>

        <div class="container">

            <form action="perguntas.php" method="POST">

                <?php require "includes/perguntas.inc";

                    global $respostas;

                    $id = $_POST["id"];

                    if ($id != 0) {
                        $resposta = $_POST["resposta"];
                        verificaResposta($id-1,$resposta);
                    }

                    if ($id < 4) {

                        carregaPergunta($id, FALSE);
                        echo "<button type='submit' class='button is-success'> Próxima </button>";    

                    } else {

                        carregaPergunta($id, FALSE);
                        echo "<a href='winner.php' class='button is-success'> Próxima </a>";    

                    }

                    
                ?>

            </form>

        </div>

        <!-- Rodapé -->
        <?php include "includes/rodape.inc"; ?>

    </body>

</html>
