<?php 
    $acertos = $_GET["acertos"];
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include "src/menu.inc"?>
        <div>
            <h1> Game Over </h1>;
            <h4> Acertos: $corretas/4 </h4>;
        </div>
    </body>
    <footer>
        <?php include "src/footer.inc"; ?>
    </footer>
</html>