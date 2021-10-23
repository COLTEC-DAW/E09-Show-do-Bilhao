<?php

    require '../Inc/perguntas.inc'; 
    if (session_status() == PHP_SESSION_NONE) session_start();

?>

<!DOCTYPE html>
<html>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bem vindo ao Show do Bilhão</title>
    </head>

    <body>

    <div id = "Rotulo">
            <h3> Responda as 5 perguntas corretamente para ganhar o show e desfrutar da vida de Burgues Safado: </h3>
            <p> <?php echo "Logado como : ". $_SESSION["user"]; echo "<br>"; ?> </p>
    </div>

        <?php include '../Inc/menu.inc';?>

        <div class="container">
            <?php 
                if(empty($_GET)){
                    $_GET['id'] = 0;
                    $_SESSION["points"] = 0;
                }

                echo $_GET["id"] . "/5 Respondidos corretamente<br>";

                PegarPerguntaIndividual($_GET['id']);
            ?>
        
        <?php if (isset($_COOKIE["UltimosPontos" . $_SESSION["user"]]) && isset($_COOKIE["UltimaSessao" . $_SESSION["user"]])) { ?>
        <p>Último Sessão: <?= $_COOKIE["UltimaSessao" . $_SESSION["user"]] ?> <br> Última pontuação: <?= $_COOKIE["UltimosPontos" . $_SESSION["user"]] ?> <?php } ?> </p>

        </div>
   
    </body>

    <?php 
        echo "\n\n\n\n\n";
        include '../Inc/rodape.inc';       
    ?>

</html>