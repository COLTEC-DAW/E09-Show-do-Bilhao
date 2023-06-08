<?php
    require "../src/Controllers/HomeController.inc";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <?php include "../templates/header.inc" ?>
    
    <div>
        <h2>Seja Bem-vindo ao Show do Bilhão</h2>
        <form action="./questions.php" method="post">
            <input type="hidden" name="currentQuestionId" value="0">
            <input type="submit" value="Começar?">
        </form>
    </div>


    <?php include "../templates/footer.inc" ?>
</body>
</html>