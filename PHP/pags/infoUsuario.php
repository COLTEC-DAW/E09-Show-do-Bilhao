<?php
include 'autenticacao.php';

// Obtém a última pontuação do usuário
$ultimaPontuacao = isset($_SESSION['pontuacao']) ? $_SESSION['pontuacao'] : 0;

// Obtém a última data de acesso do cookie
$ultimaData = isset($_SESSION['ultimo_acesso']) ? $_SESSION['ultimo_acesso'] : date('d-m-Y');

?>

<!DOCTYPE html>
<html>
<head>
    <title>Informações do Usuário</title>
</head>
<body>
    <h1>Informações do Usuário</h1>

    <p>Última Pontuação: <?php echo $ultimaPontuacao; ?></p>
    <p>Último Acesso: <?php echo $ultimaData; ?></p>

    <a href="perguntas.php">Jogar novamente.</a>
</body>
</html>
