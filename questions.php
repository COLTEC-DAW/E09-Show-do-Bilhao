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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/reset.css">
    <link rel="stylesheet" href="./assets/styles.css">
    
    <title>Show do Bilhão</title>
</head>
<body>
    <?php include "./templates/header.inc" ?>
    
    <div>
        <h2>Questions</h2>

        <?php 
            prepareScreen(); 
            
            if($game->score == count($game->questions))
            {
                include "./templates/winScreen.inc";
            }
            elseif($loseGame)
            {
                include "./templates/loseScreenTemplate.inc";
            }
            elseif(isset($_POST["currentQuestionId"]))
            {
                include "./templates/questionTemplate.inc";
            }
            else
            {
                include "./templates/errorScreen.inc";
            }
            

        ?>

    </div>


    <?php include "./templates/footer.inc" ?>
</body>
</html>