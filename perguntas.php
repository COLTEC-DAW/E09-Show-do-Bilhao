<?php 
    $id = $_GET["id"];
    $enunciados = array(
        "Qual bicho transmite Doença de Chagas?", 
        "Que nome se dá à purificação por meio da água?", 
        "Em que dia nasceu e em que dia foi registrado o Presidente Lula?",
        "Qual o nome do presidente da República Tcheca?",
    );
    $alternativas = array(
        1 => ["Abelha", "Barata", "Pulga", "Barbeiro"],
        2 => ["Abolição", "Abnegação", "Ablução", "Abrupção"],
        3 => ["6 e 27 de outubro", "8 e 27 de outubro", "9 e 26 de outubro", "7 e 23 de outubro"],
        4 => ["Andrej Babiš", "Václav Klaus", "Kateřina Zemanová", "Miloš Zeman"],
    );
    $gabarito = array("1", "3", "1", "4");
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
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