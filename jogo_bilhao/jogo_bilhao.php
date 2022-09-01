<!DOCTYPE html>

  <?php

    $num_pergunta = 0;
    $pontuacao = 0;

    session_start();

    $nome = htmlspecialchars($_POST["nome"]);
    $senha = htmlspecialchars($_POST["senha"]);
    $_SESSION["nome"] = $nome;
    $ultima_sessao = date('d/m/Y | h:i');
    setcookie("ultima_sessao", $ultima_sessao);

    include 'login.inc';

        $verificador = verificaUsuario($nome, $senha, "usuarios.json");

        if($verificador == 1){

            $_SESSION["verificadorLogin"] = $verificador;
            header("Location: login.php");
    
        } elseif($verificador == 2){

            $_SESSION["verificadorLogin"] = $verificador;
            header("Location: login.php");

        }

  ?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js
    " integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="jogo_bilhao.css">

    <title>Document</title>
</head>
    <body>

        <?php

        include 'perguntas_bilhao.inc';
        $numPergunta = 0;
        $_SESSION["numPergunta"] = $numPergunta;

        $dados = carregaQuestao($num_pergunta, "perguntas.json");

        $_SESSION["resposta"] = $dados->resposta;
        $pontuacao = $num_pergunta;
        $_SESSION["pontuacao"] = $pontuacao;

        ?>
        
        <h1 class="texto" id="titulo">Show do Bilhão</h1>
        <h3 class="texto"><?= $dados->pergunta ?></h3>

        <div class="container text-center">
            <div class="row">
            <div class="col">
                <div id="alternativas">

                <form action="proximaPagina.php" method="POST">

                <input type="radio" name="resposta" value="0"> <?= $dados->alternativas[0]?></input><br><br>
                <input type="radio" name="resposta" value="1"> <?= $dados->alternativas[1]?></input><br><br>
                <input type="radio" name="resposta" value="2"> <?= $dados->alternativas[2]?></input><br><br>
                <input type="radio" name="resposta" value="3"> <?= $dados->alternativas[3]?></input><br><br>

                <button type="submit" class="btn btn-dark">ENVIAR</button>
            
                </div>
            
                </form>
            </div>
            <div class="col">
                <div id="dados">

                    <h5>Olá <?= $nome?></h5><br>
                    <h5>Último login: <?= $_COOKIE["ultima_sessao"]?></h5><br>
                    <h5>Pontuação: <?= $pontuacao ?></h5><br>

                    <form action='sair.php'>
                        <button type="submit" class="btn btn-dark">Sair</button>
                    </form>
            
                </div>
            </div>
            </div>
        </div>


    </body>
</html>