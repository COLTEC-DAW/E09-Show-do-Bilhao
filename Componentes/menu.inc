<nav class="menu">
<h1 class="menu--titulo">Show do Bilhão</h1>
<?php
if(isset($_COOKIE["usuario-{$_SESSION["user"]["login"]}"])){
    $obj = json_decode($_COOKIE["usuario-{$_SESSION["user"]["login"]}"]);
    echo "<p>Usuario: {$obj->nome}</p>";
    echo "<p>Última pontuação: {$obj->pontuacao}</p>";
    echo "<p>Último acesso: {$obj->ultimoAcesso}<p>";
}
echo "<a href='../Services/destroiSessao.php'>Deseja fazer logout?</a>"
?>
</nav>
