<?php
session_start();

if (isset($_POST['reiniciar_jogo']) && $_POST['reiniciar_jogo']) {
    $_SESSION['id_pergunta'] = 0;
    $_SESSION['pontuacao'] = 0;
    header("Location: ../index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
    <title>Show do Bilhao</title>
</head>

<body>
    <?php include("../components/header.inc"); ?>
    <div class="main">
        <h2>Game Over!</h2>
        <p>Você respondeu incorretamente a pergunta anterior e foi <strong> ELIMINADO </strong>da disputa.</p>
        <p>Pontuação Final: <strong> <?php echo $_SESSION['pontuacao']; ?> </strong> pontos</p>
        <form method="POST" action="">
            <button type="submit" name="reiniciar_jogo" value="1">Jogar novamente</button>
        </form>

        <?php include("../components/footer.inc"); ?>

    </div>

</body>

</html>
