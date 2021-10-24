<?php
require "./perguntas.inc";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>

<body class="container">

    <div class="col_12">
        <?php include "menu.inc"; ?>

        <br>
        <hr>

        <div>
            <?php
            if (isset($_GET["id"])) {
                carregaPergunta($_GET["id"]);
                // if (verificaID()) {
                //     echo "<h2>Pergunta selecionada:</h2>";
                //     exibePergunta($_GET["id"]);
                //     echo "<br> <hr>";
                // }
            }
            ?>
        </div>
    </div>

    <?php
    include "./rodape.inc";
    ?>
</body>

</html>

<!-- function carregaPergunta($id){
    if($id < 0 || $id > (count($GLOBALS["Quests"])-1) || $id == null){
        return "Atributo id inválido. " . $id . " não é acessível no banco de dados";
    }
    $default_Inicio = "\t\t\t" . '<div id="QOneCard">';
    $default_Fim = "</div>\n";

    $str = $default_Inicio . $GLOBALS["Quests"][$id] . "</br>";

    $letras = ["A","B","C","D","E","F","G"];
    for($i=0;$i<5;$i++){
        $str = $str . '<input type="radio" name="options" value="' . $i . '"></input> ' . $letras[$i] .") " . $GLOBALS["Alternativas"][$id][$i] . "</br>";
    }

    $str = $str . "</br></br>" . $default_Fim;

    return $str;
} -->