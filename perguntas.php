<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        $perguntas= array("Quem é Taylor Swift?","Qual a data de nascimento da cantora?","Onde ela nasceu?","Com quantos anos fez seu primeiro album?","Quantos albuns publicados ela tem?");
        $respostas=["a", "d","c","b","a"];
        
        $perg1=["Cantora-Compositora","Cozinheira","Cineasta","Jogadora de vôlei"];
        $perg2=["18/05/1989","15/08/1999","23/06/1999","13/12/1989"];
        $perg3=["Estados Unidos","Canadá","Pensilvania","Inglaterra"];
        $perg4=["19","16","17","15"];
        $perg5=["10","8","7","11"];
        $alternativas=[$perg1, $perg2, $perg3, $perg4, $perg5];
    
        include "perguntas.inc";
    ?>

    <h2><?php $pergunta = carregaPergunta($id)[0]; echo $pergunta; ?></h2>
    <form action="index.php" method="GET">
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


</body>
</html>


