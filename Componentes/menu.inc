<head>
    <link rel="stylesheet" href="../Styles/">
</head>

<h1 class="menu--titulo">Show do Bilhão</h1>
<form action="../Controllers/perguntas.php" method="post">
    <input type='hidden' name="pergunta" value="0"/>
    <button type="submit">Jogar</button>
</form>
<?php
 $obj = json_decode($_COOKIE["usuario-{$_SESSION["user"]}"]);
 echo $_SESSION["user"];
 
 if(isset($_COOKIE["usuario-{$_SESSION["user"]}"])){
    echo $obj->nome;
}

?>
