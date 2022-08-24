<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="jogo_bilhao.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>

        <?php

        session_start();

        $dados = [];
        $resposta = $_POST['resposta'];
        include 'perguntas_bilhao.php';
        include 'perguntas_bilhao.inc';
        $numPergunta = $_SESSION['numPergunta'] + 1;
        $pontuacao = $_SESSION["pontuacao"];

        if($resposta != $respostas[$pontuacao]){

            header("Location: fimJogo.php");

        }

        $pontuacao = $numPergunta;
        $_SESSION["pontuacao"] = $pontuacao;

        if ($pontuacao == 5){

            header("Location: ganhou.php");

        }

        $_SESSION['numPergunta'] = $numPergunta;
        $dados = pergunta($numPergunta, $perguntas, $alternativas);
        $nome = $_SESSION["nome"];

        ?>
        
        <h1 class="texto" id="titulo">Show do Bilhão</h1>

        <h3 class="texto"><?php echo $dados[0]?></h3>

        <div class="container text-center">
            <div class="row">
            <div class="col">

                <div id="alternativas">

                <form action="proximaPagina.php" method="POST">

                <input type="radio" name="resposta" value='0'> <?php echo $dados[1]?></input><br><br>
                <input type="radio" name="resposta" value='1'> <?php echo $dados[2]?></input><br><br>
                <input type="radio" name="resposta" value='2'> <?php echo $dados[3]?></input><br><br>
                <input type="radio" name="resposta" value='3'> <?php echo $dados[4]?></input><br><br>

                <button type="submit" class="btn btn-dark">ENVIAR</button>
            
                </div>
            
                </form>
            </div>
            <div class="col">
                <div id="dados">

                    <h5>Olá <?php echo $nome?></h5><br>
                    <h5>Último login: <?php echo $_COOKIE["ultima_sessao"]?></h5><br>
                    <h5>Pontuação: <?php echo $pontuacao ?></h5><br>

                    <form action='sair.php'>
                        <button type="submit" class="btn btn-dark">Sair</button>
                    </form>
            
                </div>
            </div>
            </div>
        </div>

    
</body>
</html>