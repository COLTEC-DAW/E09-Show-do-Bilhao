<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Parabéns</title>
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
                $jogo = 100;
                $premio = 0;
                include '../partials/progresso.inc'
            ?>

            <div class="jumbotron py-3">
                <h1 class="display-4 mb-3 text-center">
                    Parabéns !!
                </h1>
                <h3 class="mb-3 text-center">
                    Você só tem uma chance, coloque seus dados para receber o premio.
                </h3>

                <form class="container-fluid mt-4" action="../controllers/awardController.php" method="post">
                    <div class="form-group">
                        <label for="nome">Nome comleto:</label>
                        <input class="form-control" type="text" name="nome" value="" id="nome" required>
                    </div>
                    <div class="form-group">
                        <label for="conta">Numero da conta no banco:</label>
                        <input class="form-control" type="text" name="conta" value="" id="conta" required>
                    </div>
                    <div class="d-flex">
                        <input class="btn btn-primary btn-lg mt-3 mx-auto" type="submit" value="Enviar">
                    </div>
                </form>
            </div>
        </div>

        <?php include '../partials/footer.inc'; ?>
        <?php include '../partials/scrypts.inc' ?>
    </body>
</html>