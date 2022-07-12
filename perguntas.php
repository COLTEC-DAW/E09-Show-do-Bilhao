<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Show do Bilhão</title>
</head>

<body>

    <div><?php 
        $id = $_GET["id"];

        include "menu.inc";
        include "perguntas.inc";

        carregaPergunta($id);
        include "rodape.inc"
        
    ?></div>
    
</body>
</html>