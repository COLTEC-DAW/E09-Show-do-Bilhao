<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Pronto !!</title>
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
                $premio = 100;
                include '../partials/progresso.inc'
            ?>
            <div class="mt-5 text-center">
                Viu como é fácil, basta cadastrar, fazer login e jogar.<br>
                Compartilhe com seus amigos... !!!
            </div>
            <div class="mt-5 text-center display-4">
                Obrigado !!!
            </div>
        </div>


        <?php include '../partials/footer.inc' ?>
        <?php include '../partials/scrypts.inc' ?>
    </body>
</html>