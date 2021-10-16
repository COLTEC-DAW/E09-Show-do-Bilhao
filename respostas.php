<?php
    /**
     * Inclusões:
     */
    include 'perguntas.inc';
    $pergTotais = 2;
    $escolha = $_POST['escolha'];
    $pergunta = $_POST['pergunta'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $boo = confere($escolha, $respostasCertas, $pergunta);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta encoding="utf-8">
    <meta name="desenvolvedor" content="Laiza Ferreira">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Do Bilhão</title>
    <link rel="stylesheet" href="./detalhes.sass" />
    <link rel="stylesheet" href="./arquivo.sass" />
    <link rel="stylesheet" href="./respostas.php" />
</head>
<body class="body" >
    <div class="container">
        <br>
        <section>
            <form class="form" action="perguntas.php" method="post">
                <?php 
                    $pergunta++;
                    if($pergunta > $pergTotais){
                        // aqui significa que já respondeu todas as perguntas do jogo;
                        $pergunta = -1;
                    } 
                ?>
                <input type="hidden" name="login" value=<?=$login?>>
                <input type="hidden" name="senha" value=<?=$senha?>> <br>
                <input type="hidden" name="id" value=<?=$pergunta?>>
                <?php 
                    if($pergunta == -1){
                        acabarJogo();
                    } elseif ($boo == false){
                        // aqui é sinal que perdeu o jogo;
                        echo '<a href="./index.php"> Página inicial </a>';
                    } else{
                        echo '<input type="submit" value="Próxima"><br>';
                    }
                ?>
            </form>
        </section>
    </div>
</body>
</html>