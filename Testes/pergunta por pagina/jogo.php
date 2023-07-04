<?php
    require "perguntas.inc.php";
    
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }else{
        $id = 0;
    }

    if($id > 4){
        $id = 0;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <?php
        carregaPergunta($id);
    ?>

    <form action="jogo.php" method="get">
        <input type="hidden" name="id" value=<?php echo $id + 1?>>
        <input type="submit" value="Prox">
    </form>
</body>
</html>
</body>
</html>