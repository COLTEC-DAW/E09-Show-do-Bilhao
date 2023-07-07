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

        session_start();

        $resposta = $_POST['resposta'];
        include 'perguntas_bilhao.inc';
        $numPergunta = $_SESSION['numPergunta'] + 1;
        $pontuacao = $_SESSION["pontuacao"];
        $respostaCerta = $_SESSION["resposta"];

        if($resposta != $respostaCerta){
            setcookie("ultima_pontuacao", $pontuacao);
            header("Location: gameover.php");

        }

        $pontuacao = $numPergunta;
        $_SESSION["pontuacao"] = $pontuacao;

        if ($pontuacao == 5){
            setcookie("ultima_pontuacao", $pontuacao);
            header("Location: ganhou.php");

        }

        $_SESSION['numPergunta'] = $numPergunta;
        $dados = carregaQuestao($numPergunta, "perguntas.json");
        $_SESSION["resposta"] = $dados->resposta;
        $nome = $_SESSION["nome"];
        ?>
        
        <h1>TM's Billion</h1>
        <h3><?= $dados->pergunta?></h3>
        <div>
            <div>
            <div>
                <div>

                <form action="proximaPagina.php" method="POST">

                <input type="radio" name="resposta" value="0"> <?= $dados->alternativas[0]?></input><br><br>
                <input type="radio" name="resposta" value="1"> <?= $dados->alternativas[1]?></input><br><br>
                <input type="radio" name="resposta" value="2"> <?= $dados->alternativas[2]?></input><br><br>
                <input type="radio" name="resposta" value="3"> <?= $dados->alternativas[3]?></input><br><br>

                <button type="submit">ENVIAR</button>
            
                </div>
                </form>
                <div>

                    <h5>Olá <?= $nome?></h5><br>
                    <h5>Último login: <?= $_COOKIE["ultima_sessao"]?></h5><br>
                    <h5>Pontuação: <?= $pontuacao ?></h5><br>

                    <form action='sair.php'>
                        <button type="submit">Sair</button>
                    </form>
            
                </div>
            </div>
            </div>
        </div>
 
</body>
</html>