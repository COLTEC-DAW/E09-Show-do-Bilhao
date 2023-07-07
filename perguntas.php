<!DOCTYPE html>
<?php
    session_start();
    require "control/perguntas.inc";
    require "control/user.inc";
    
    if(isset($_GET["id"])) {
        $id = $_GET["id"];
    } else {
        $id = 0;
    }

    if(!isset($_POST["resposta"])){
        if(isset($_POST["login"])) {
            Login();
        }
    }

    $user=unserialize($_SESSION["user"]);
?>

<html lang="en">
<body>
    <?php include "menu.php"; ?>

    <div class="wrapper">
        <h1>Show do Bilhão</h1>
        <form action="perguntas.php?id=<?= $id+1 ?>" method="POST">
            <?php verificaResposta($id);?>
        </form>
        <?php if($id == 0 && isset($_SESSION["user"])) :?>
            <p>Ultima Pontuação: <?= ($_COOKIE[$user->login . "_ultimapontuacao"])?></p>
            <p>Ultimo login: <?= $_COOKIE[$user->login . "_ultimologin"]?></p>
        <?php endif;?>
    </div>
    
    <?php include "rodape.html";?>
</body>
</html>