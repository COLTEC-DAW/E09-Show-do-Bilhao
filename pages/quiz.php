<?php
    require '../models/dao/usuariosDAO.php';
    require '../models/classes/usuariosClass.php';
    require '../models/dao/questoesDAO.php';
    require '../models/classes/questoesClass.php';

    $quest = new Questoes();
    $perg = (int)$_GET['id'];

    if($perg == 5) {
        header("Location: premio.php");
    }

    if(!isset($_COOKIE['usuario'])) {
        header("Location: ../index.php");
    }

    $user = $_COOKIE['usuario'];
    $placar = Usuarios::getPlacar($user);

    if(Usuarios::perdeu($user)) {
        header("Location: derrota.php");
    }

    if($perg != $placar) {
        header("Location: quiz.php?id=" . $placar);
    }
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Show do Bilhão</title>
        <?php include '../partials/links.inc' ?>
    </head>
    <body>
        <?php
            $logged = true;
            include '../partials/nav.inc'
        ?>

        <div class="container">
            <?php
                $cadastro = 100;
                $jogo = 20*$perg;
                $premio = 0;
                include '../partials/progresso.inc'
            ?>

            <div class="jumbotron py-3">
                <h1 class="display-4 mb-3">
                    <?= $quest->carregaPergunta($perg)?>
                </h1>

                <form class="container-fluid" action="../controllers/quizController.php" method="post">
                    <?= $quest->carregaOpcoes($perg); ?>
                    <div class="d-flex">
                        <input class="btn btn-primary btn-lg mt-3 mx-auto" type="submit" value="Responder">
                    </div>
                </form>
            </div>
        </div>

        <?php include '../partials/footer.inc'; ?>
        <?php include '../partials/scrypts.inc' ?>
    </body>
</html>