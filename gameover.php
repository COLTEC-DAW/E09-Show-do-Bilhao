<?php
    $certa = $_POST["certas"];
    echo "<h1>Fim de Jogo</h1>";
    echo "<h3>Você acertou $certa pergunta(s)</h3>";
?>
<form action="index.php" method="POST">
    <input type="submit" name="Voltar" value="Página Inicial">
</form>
<form action="logout.php" method="POST">
    <input type="submit" name="logout" value="Log Out">
</form>
