<!DOCTYPE html>
<?php 
    require "perguntas.inc";
    
    if(isset($_GET["id"])) {
        $id = $_GET["id"];
    } else {
        $id = 0;
    }
?>

<html lang="en">
<body>
    <?php include "menu.html"; ?>

    <div class="wrapper">
        <h1>Show do Bilhão</h1>
        <form action="index.php?id=<?= $id+1 ?>" method="POST">
            <?php verificaResposta($id);?>
        </form>
    </div>
    
    <?php include "rodape.html";?>
</body>
</html>