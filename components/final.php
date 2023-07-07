<?php
session_start();
if (isset($_POST['reiniciar_jogo']) && $_POST['reiniciar_jogo'] === '1') {
    header("Location: index.php");
    $_SESSION['pergunta_id'] = 0;
    $_SESSION['pontuacao'] = 0;
    header("Location: index.php");
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
    <?php include("header.inc"); ?>
    <div class="main">
        
        <h2>PARABÉNS NERDOLA!</h2>
        <p>Você VENCEU o jogo e acabou de se tornar o MAIS NOVO bilionário do COLTEC</p>
        <p>Sua pontuação de campeão é de <strong><?php echo $_SESSION['pontuacao']; ?> PONTOS. </strong></p>
        <form method="POST" action="../index.php">
            <input type="hidden" name="reiniciar_jogo" value="1">
            <button type="submit">Ficar <strong>BILIONARIO</strong> de novo</button>
        </form>
        <?php include("footer.inc"); ?>
    </div>

</body>
</html>