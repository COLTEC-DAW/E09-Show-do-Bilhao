<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Show do Bilhão</title>
</head>
<body>
    
    <?php 
        include("menu.inc");
        require("perguntas.inc");
        
        $pergunta = carregaPergunta();
        
        echo "<h3>".$pergunta["enunciado"]."</h3>";
        echo "<ul>";
        foreach($pergunta["alternativas"] as $alternativa)
            echo "<li>".$alternativa."</li>";
        echo "</ul>";

        include("rodape.inc");

    ?> 
     
    
</body>
</html>