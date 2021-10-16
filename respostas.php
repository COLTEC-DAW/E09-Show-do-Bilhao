<?php
    /**
     * Inclusões:
     */
    include 'perguntas.inc';

    $pergTotais = 2;
    $escolha = $_POST['escolha'];
    $IDpergunta = $_POST['pergunta'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $json = file_get_contents("perguntas.json");
    $perguntas = json_decode($json);

    $boo = confere($escolha, $perguntas, $IDpergunta);
    
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
                    $IDpergunta++;
                    if($IDpergunta > $pergTotais){
                        // aqui significa que já respondeu todas as perguntas do jogo;
                        $IDpergunta = -1;
                    } 
                ?>
                <input type="hidden" name="login" value=<?=$login?>>
                <input type="hidden" name="senha" value=<?=$senha?>> <br>
                <input type="hidden" name="id" value=<?=$IDpergunta?>>
                <?php 
                    if($boo == false){
                        // significa que deu game over;
                        echo '<a href="./index.php"> Clique aqui. </a> ';                        
                    } elseif ($IDpergunta == -1){
                        // aqui significa que ganhou
                        acabarJogo();
                    } else {
                        echo '<input type="submit" value="Próxima"><br>';
                    }
                ?>
            </form>
        </section>
    </div>
</body>
</html>