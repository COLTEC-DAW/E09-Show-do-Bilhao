<?php
    session_start();
    require "./src/Controllers/QuestionsController.inc";
    require "./src/Common/Functions.inc";
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
    <?php include "./templates/header.inc" ?>
    
    <div>
        <h2>Questions</h2>

        <?php loadScreen(); ?>

    </div>


    <?php include "./templates/footer.inc" ?>
</body>
</html>