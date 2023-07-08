<?php 
    $_COOKIE['nacertos'] += 1;
    $pontuacao = $_COOKIE['nacertos'];
?>
<main>
    <h1>Deu Cruzeiro</h1>
    <p> Você está logado como: <?php echo $_SESSION['login'] ?></p>
    <p> Pontuação: <?php echo $pontuacao ?></p> 
    <form action="logout.php" method="post">
    <input type="submit" value="Logout">

</main>