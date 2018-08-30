<!DOCTYPE html>
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
        <?php require "file.php"; ?>
        <?php $pergunta = controlepergunta($id);?>
        <?php $resposta = controlerespostas($id);?>
        <?php $gabarito = controlegabarito($id);?>
        <form action="/perguntas.php" method="POST">              
            <h1> <?php echo ($pergunta);?> </h1>
            <div class="radio">
                <label><input type="radio" name="optradio" value="0"> <?php echo ($resposta[0]);?> </label>
                <label><input type="radio" name="optradio" value="1"> <?php echo ($resposta[1]);?> </label>
                <label><input type="radio" name="optradio" value="2"> <?php echo ($resposta[2]);?> </label>
                <label><input type="radio" name="optradio" value="3"> <?php echo ($resposta[3]);?> </label>
            </div>
            <input type="submit" class="btn btn-primary"></input>
            <input type="hidden" name="id" value="<?=$id?>"></input>   
        </form>
        </body>
    
    <?php include  "rodape.inc"; ?>
</html>