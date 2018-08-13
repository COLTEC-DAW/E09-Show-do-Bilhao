<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Show do Bilhão</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/dist/footer.css">
    </head>
    <body>
        <?php
            require '../partials/pergunta.inc';
            $perg = $_GET["id"];
            include '../partials/nav.inc';
        ?>

        <div class="container mt-5">
            <div class="jumbotron">
                <h1 class="display-4 mb-3"><?= carregaPergunta( (int)$perg ); ?></h1>

                <form class="container-fluid" action="../controllers/quiz.php" method="post">
                    <?php
                        echo "<input class='d-none' type='text' name='id' value='$perg'>";
                        $opt = carregaOpcoes( (int)$perg );
                        for ($i=0; $i < 5; $i++) {
                            echo "
                            <div class='form-check'>
                                <input class='form-check-input' type='radio' name='radio' id='option$i' value='$i'>
                                <label class='form-check-label' for='option$i'>
                                    $opt[$i]
                                </label>
                            </div>";
                        }
                    ?>
                    <div class="d-flex">
                        <input class="btn btn-primary btn-lg mt-3 mx-auto" type="submit" value="Responder">
                    </div>
                </form>
            </div>
        </div>

        <?php include '../partials/footer.inc'; ?>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>