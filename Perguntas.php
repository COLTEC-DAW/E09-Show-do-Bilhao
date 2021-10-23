<?php

    include "Assets\Dados.php";
    include "Assets\Menu.php";
    include "Assets\Rodape.php";

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perguntas</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body style="background-image: url(./images/background_jogo.png);">
    
    <div id="container" class="container-xl" ">
        <?php echo $GLOBALS['contador']?>
        <div id="home" class="col-xl-11 card">

            <div id="Home-title" class="col-xl-7 py-3">
               <h2 id="title" class="col-xl-12 card-title">
                   Show do Bilhão
               </h2>
            </div>

            <div id="home-menu" class="col-xl-11 card-body">
                <div id="info" class="col-xl-12">

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
                </div>
            </div> 
        </div>
    </div>

    <script>
       
       

       function ConfereResposta(){

       }


    </script>
</body> 
</html>