<html>
    <head>
        <title>Jogo do Bilhão</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <h2 id="comeco">GAME OVER !</h2>
        <?php setcookie("data", date("d/m/Y"));?>
         <div class="col-md-12">
                <button type="button" class="btn btn-primary center-block" onclick="location.href = 'inicio.php' ;">Tentar De Novo</button>
            </div>
    </body>
</html>
