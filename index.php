<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do bilhão</title>

    <style>
        h1{
            color: pink;
            text-align: center;
        }
        h2{
            text-align: center;
        }
        .pergunta{
            margin-top: 5px;
        }
        form{
            width: 100%;
            text-align: center;
        }
        footer{
        background-color: pink;
        width: 100%;
        height: 50px;
        position: absolute;
        bottom: 0;
        left: 0;
        text-align: center;
        }
        
    </style>
</head>
<body>
    <?php include "menu.inc"; ?>

    <?php
    $id= $_GET["id"];
    ?>

    <?php include "perguntas.php"; ?>
    <h2><?php $pergunta = carregaPergunta($id)[0]; echo $pergunta; ?></h2>

    <form>
        <div class="pergunta">
            <label>
                <input type="radio" name="pergunta"> <?php 
                $alt1 = carregaPergunta($id)[2];
                echo $alt1;?>
            </label>
        </div>
        <div class="pergunta">
            <label>
                <input type="radio" name="pergunta"> <?php 
                $alt2 = carregaPergunta($id)[3];
                echo $alt2;?>
            </label>
        </div>
        <div class="pergunta">
            <label>
                <input type="radio" name="pergunta"> <?php 
                $alt3 = carregaPergunta($id)[4];
                echo $alt3;?>
            </label>
        </div>
        <div class="pergunta">
            <label>
                <input type="radio" name="pergunta"> <?php 
                $alt4 = carregaPergunta($id)[5];
                echo $alt4;?>
            </label>
        </div>

        <input class="pergunta" type="submit" name="resp">

        <?php 
        // $resposta = $_POST["resp"];
        // $alternativa=carregaPergunta($id)[1];
        // if($resposta == $alternativa){
            
        // }
        ?>
    </form>

    <?php include "rodape.inc"; ?>
</body>
</html>