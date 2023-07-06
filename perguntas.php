


<!DOCTYPE html>
<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" ient="IE=edge">
    <meta name="viewport" ient="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>

<body>
    <h1>Show do Bilhao</h1>

    <div>
        <?php
        require "questao.php";
        
        if (empty($_GET)) {
            carregaPergunta(0);
        }
        else {
            carregaPergunta($_GET['id']);
        }

        ?>
    </div>

</body>

</html>