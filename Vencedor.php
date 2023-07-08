<?php 
    $pontuacao = $_COOKIE['nacertos'] + 1;
?>
<main>
    <h1>Deu Cruzeiro</h1>
    <p> Você está logado como: <?php echo $_SESSION['login'] ?></p>
    <p> Pontuação: <?php echo $pontuacao ?></p> 
    <a href="login.php">Volte para a tela de login</a> 

</main>