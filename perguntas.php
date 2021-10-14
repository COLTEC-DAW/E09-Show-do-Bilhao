<?php
    require "perguntas.inc";
    
    function GetHeader(){
        $id = $_GET['id'];
        $id = $id + 1;

        $redirect = "Location: /ShowDoBilhao/winner.php";

        if($id > 5){
            defineCookies($id);
            header($redirect);
        }

        return "perguntas.php?id=" . $id;
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Show do Bilhão</title>
</head>

<body>
    <?php
        include "./menu.inc";
    ?> 

    <form action=<?php echo GetHeader() ?>  method="post">
        <div id="questoes">
            <?php echo carregaPergunta($_GET["id"]) ?>
        </div>
    </form>


    <?php
        include "./rodape.inc";
    ?>  
    
</body>
</html>
