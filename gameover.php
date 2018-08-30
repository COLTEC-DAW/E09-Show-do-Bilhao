<html>
    <head>
        <meta encoding="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="initial-scale=1.0, width=device-width"/> 
    </head>
    <?php include "menu.inc"; ?>
    <?php $id = $_GET["id"]; ?>
    <body>
        <h1> Você perdeu na pergunta <?php echo ($id+1);?> de 5 </h1>
    </body>
    
    <?php include  "rodape.inc"; ?>
</html>