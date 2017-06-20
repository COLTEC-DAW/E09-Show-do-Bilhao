<?php ob_start();?>
<meta charset="utf-8">
<?php
    if($_COOKIE["pergunta"]){
        echo "<h1>VOCÊ VENCEU O SHOW DO BILHÃO!!</h1>";
        echo "<h3>Temos um novo bilionário entre nós!</h3>";
    }
    else{
        echo "<h1>Jogador não identificado! Vitória cancelada...</h1>";
    }
?>
<form action="login.php" method="POST">
    <input type="submit" name="Voltar" value="Página Inicial">
</form>