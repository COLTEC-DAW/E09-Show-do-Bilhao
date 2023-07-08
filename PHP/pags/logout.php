<?php
include 'autenticacao.php';

// Verifica se o jogador está autenticado
if (jogadorAutenticado()) {
    $jogador = $_SESSION['jogador'];

    logoutJogador();

    header("Location: autenticacao.php?logout=1&jogador=" . urlencode($jogador));
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Show do Bilhão - Logout</title>
</head>
<body>
    <h1>Show do Bilhão - Logout</h1>

    <p>Obrigado por jogar!</p>
</body>
</html>
