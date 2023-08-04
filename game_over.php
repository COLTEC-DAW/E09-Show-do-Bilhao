<?php
include("menu.inc");

session_start();
$saldoAcertos = $_GET['saldoAcertos'];

setcookie('ultima_pontuacao', $saldoAcertos);
setcookie('ultima_acesso', date('d-m-Y H:i:s'));


echo "Game Over!!<br>Saldo de Acertos: " . $saldoAcertos;

echo "
<form action='perguntas.php' method='GET'>
    <input type='submit' value='Jogar novamente'>
    <input type='hidden' name='id' value='0'>
</form>
";

echo "
    <form action='login.php' method='POST'>
        <input type='submit' name='logOut' id='logOut' value='Sair'>
    </form>
";
include("rodape.inc");
?>