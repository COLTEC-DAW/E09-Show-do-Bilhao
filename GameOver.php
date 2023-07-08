<?php
if (isset($_COOKIE['nacertos'])) {
    $pontuacao = $_COOKIE['nacertos'];
} else {
    $pontuacao = 0;
}
//joao tentei incrementar o cookie de horas porem não consegui
?>
<main>
    <h1>FOI DE ATLETICO</h1>
    <p> Você está logado como: <?php echo $_SESSION['login'] ?></p>
    <p> Pontuação: <?php echo $pontuacao ?></p> 
    <form action="logout.php" method="post">
    <input type="submit" value="Logout">
</main>