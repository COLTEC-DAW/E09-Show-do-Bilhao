<div class="menu">
<h1 class="menu--titulo">Show do Bilhão</h1>
<?php

if(isset($_COOKIE["usuario-{$_SESSION["user"]}"])){
    $obj = json_decode($_COOKIE["usuario-{$_SESSION["user"]}"]);
    echo "<p>Usuario: {$obj->nome}</p>";
    echo "<p>Última pontuação: {$obj->pontuacao}</p>";
    echo "<p>Último acesso: {$obj->ultimoAcesso}<p>";
}
?>
</div>
