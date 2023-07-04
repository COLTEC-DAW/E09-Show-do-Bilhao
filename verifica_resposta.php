<?php

    $login = htmlspecialchars($_POST["login"]);
    $senha = htmlspecialchars($_POST["senha"]);

?>

<!DOCTYPE HTML>
<html>

<head></head>

<body>
    
    <h1>Pagina Principal</h1>


    <p> Olá, <?= $login ?>. Sua senha e <?= $senha ?>.<p>



</body>


</html>