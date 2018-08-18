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

        <div class="container text-center mt-3">
            <p class="display-4">Olá <?= $perfil['nome'] ?>, está se divertindo?</p>
            <h1 class="mt-3">Sua pontuação máxima</h1>
            <h3 class=""><?= $perfil['placar'] ?></h3>
            <h1 class="mt-3">Seu email</h1>
            <h3 class=""><?= $perfil['email'] ?></h3>
            <h1 class="mt-3">Seu login</h1>
            <h3 class=""><?= $perfil['usuario'] ?></h3>
            <h1 class="mt-3">Não se preocupe, não mostraremos sua senha</h1>
        </div>

        <?php include '../partials/footer.inc' ?>
        <?php include '../partials/scrypts.inc' ?>
    </body>
</html>