<?php
if (isset($_COOKIE['nacertos'])) {
    $pontuacao = $_COOKIE['nacertos'];
} else {
    $pontuacao = 0;
}

$ultimaVezJogado = $_COOKIE["ultima"];



// Saída HTML começa a partir daqui
?>
<main>
    <h1>FOI DE ATLETICO</h1>
    <p> Você está logado como: <?php echo $_SESSION['login'] ?></p>
    <p> Pontuação: <?php echo $pontuacao ?></p> 
    <p>Ultima vez logado <?php echo $ultimaVezJogado ?></p>
    <a href="login.php">Volte para a tela de login</a> 
</main>