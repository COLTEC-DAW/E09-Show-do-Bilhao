<?php require "../processing/perguntas.inc.php";
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/index.css">
</head>
<body>
    <form method="POST" action="../pages/perguntas.php?id=<?php echo $id+1?>">

    <div class="container">
        <div class="row">
            <p><?php carregaPergunta(); ?></p>
        </div>
    </div>

    <?php for($i=0; $i < 4; $i++){ ?>

    <div class="container">
        <div class="row justify-content-center">
            <label><input type="radio" name="alt" value="<?php echo ($i+1); ?>"> <?php carregaAlternativa($i);?> </label>
            </div>
        </div>
    </div>

    <?php }?>
    
    <div class="container">
        <button type="submit">Enviar</button>
    </div>
    </form>
    
</body>
</html>


