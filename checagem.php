<?php
    require 'perguntas.inc';
    $pergunta = $_POST["pergunta"];
    $resposta = $_POST["alternativa"];
    if($resposta == $respostas[$pergunta]){
        $pergunta++;
        $pontos = $_COOKIE["pontos"] + 1;
        setcookie("pontos",$pontos);
        header("location: perguntas.php?id=$pergunta");
    }
    else{
?>
    <html>
        <head>
            <title>Jogo do Bilhão</title>
            <meta charset="utf-8">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="index.css">
        </head>
        <body>
            <h3 id="comeco">Alternativa Errada</h3>
            <div class="col-md-12">
                <button type="button" class="btn btn-danger center-block" onclick="location.href = 'gameover.php' ;">OK :( </button>
            </div>
        </body>
    </html>
<?php    
    }
?>