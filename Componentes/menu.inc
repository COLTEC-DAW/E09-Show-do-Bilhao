
<h1 class="menu--titulo">Show do Bilhão</h1>
<?php
if(isset($_COOKIE["usuario-{$_SESSION["user"]}"])){
    $obj = json_decode($_COOKIE["usuario-{$_SESSION["user"]}"]);
    echo "Usuario: {$obj->nome}";
    echo "Última Pontuacao: {$obj->pontuacao}";
}



?>
