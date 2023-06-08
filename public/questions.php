<?php
    require "../src/Controllers/QuestionsController.inc";

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
        <h2>Questions</h2>
        <form method="post">

            <?php 
                if(validadeAnswer()){
                    loadCurrentQuestion();
                }else{
                    loadLoseScreen();
                }
            ?>
            
        </form>

    </div>


    <?php include "../templates/footer.inc" ?>
</body>
</html>