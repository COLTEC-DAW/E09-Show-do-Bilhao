<?php
    require '../models/dao/usuariosDAO.php';
    require '../models/classes/usuariosClass.php';
    $perfil = Usuarios::getArray($_COOKIE['usuario']);
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Sua conta</title>
        <?php include '../partials/links.inc' ?>
    </head>
    <body>
        <?php
            $logged = true;
            include '../partials/nav.inc'
        ?>

        <div class="container mt-3 text-center">
            <h1>Sua pontuação máxima</h1>
            <h2><?= $perfil['placar'] ?></h2>
        </div>

        <?php include '../partials/footer.inc' ?>
        <?php include '../partials/scrypts.inc' ?>
    </body>
</html>