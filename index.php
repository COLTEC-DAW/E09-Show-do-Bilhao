<?php
include "perguntas.inc";

if (session_status() == PHP_SESSION_NONE) session_start();

if (!isset($_SESSION["nome"])) {
    header("Location: ./login.php");
}

?>

<!DOCTYPE html>

<html>


    <head>
        <title>Show do Bilhão</title>
        <meta charset="UTF-8">
        <meta http-equiv="X UA-Compatible" content="IE=edge">

    </head>

    <body>

        <p>
            <?php echo "<h1>Bem vindo ao show do Bilhão</h1>"; ?>
            <?php echo ("Clique no link abaixo para começar o jogo");?>
            <?php echo ('Usuário:');?>
            <?php echo ($_SESSION['nome']);?>
            <?php $jogo = '<div>
                        <button>
                        <a href="./perguntas.php?id=1" >Ínicio</a> 
                        </button>
                        </div>';?>
            <?php echo($jogo);?>
            <?php 
            if (isset($_COOKIE["ultima-pontuacao"]) && isset($_COOKIE["ultimo-login"])) { ?>
            <div>
                <h4>Último jogo: <?= $_COOKIE["ultimo-login" ] ?></h4>
                <h4>Última pontuação: <?= $_COOKIE["ultima-pontuacao" ] ?></h4>
            </div>
            <?php } ?>
            <a href="./logout.php"><button>SAIR</button></a>

        </p>
    </body>

</html>