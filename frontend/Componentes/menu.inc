<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
    <link rel="stylesheet" href="../Styles/styles.css">
</head>
<nav class="menu">
<h1 class="menu--titulo">Show do Bilhão</h1>
<?php
if(isset($_COOKIE["usuario-{$_SESSION["user"]["login"]}"])){
    $obj = json_decode($_COOKIE["usuario-{$_SESSION["user"]["login"]}"]);
    echo "<p>Usuario: {$obj->nome}</p>";
    echo "<p>Última pontuação: {$obj->pontuacao}</p>";
    echo "<p>Último acesso: {$obj->ultimoAcesso}<p>";
}
echo "<a href='../../backend/Services/destroiSessao.php'>Deseja fazer logout?</a>"
?>
</nav>
