<?php
    echo "<h1>VOCÊ VENCEU O SHOW DO BILHÃO!!</h1>";
    echo "<h3>Temos um novo bilionário entre nós!</h3>";
    
    date_default_timezone_set('America/Sao_Paulo');
    setcookie("tentativa", date("d/m/Y - H:i:s"));
    setcookie("pontos", $_COOKIE["pergunta"]);
?>
<form action="login.php" method="POST">
    <input type="submit" name="Voltar" value="Página Inicial">
</form>