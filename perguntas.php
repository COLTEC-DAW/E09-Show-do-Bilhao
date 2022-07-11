<!DOCTYPE html>

<?php 
    $id = $_GET["id"];
    $enunciados = array("ab", "cd", "ef");
    $alternativas = array(
        1 => ["a", "b"],
        2 => ["c", "d"],
        3 => ["e", "f"],
    );
    $gabarito = array("a", "d", "e");
?>

<html>
    <head>

    </head>
    <body>
        <?php include "src/menu.inc"?>

        <div>
            <?php 
                require "src/perguntas.inc";
                carregaPergunta($id, $enunciados, $alternativas);
            ?>
        </div>
    </body>
    <footer>
        <?php include "src/footer.inc"; ?>
    </footer>
</html>