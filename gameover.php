<?php ob_start();?>
<meta charset="utf-8">
<?php
    $certa = $_COOKIE["pontos"];
    
    echo "<h1>Fim de Jogo</h1>";
    echo "<h3>Você acertou $certa pergunta(s)</h3>";
?>
<form action="login.php" method="POST">
    <input type="submit" name="Voltar" value="Página Inicial">
</form>
