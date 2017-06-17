<?php
    $certa = $_COOKIE["pergunta"];
    
    echo "<h1>Fim de Jogo</h1>";
    echo "<h3>Você acertou $certa pergunta(s)</h3>";

    date_default_timezone_set('America/Sao_Paulo');
    setcookie("tentativa", date("d/m/Y - H:i:s"));
    setcookie("pontos", $certa);
?>
<form action="login.php" method="POST">
    <input type="submit" name="Voltar" value="Página Inicial">
</form>
