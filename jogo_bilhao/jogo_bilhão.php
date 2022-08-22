<!DOCTYPE html>

  <?php
  
    $nome = htmlspecialchars($_POST["nome"]);
    setcookie("nome", $nome);

    session_start();

    $_SESSION['finalLogin'] = date('d/m/Y | h:i', strtotime('-3 hours'));

  ?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="jogo_bilhao.css">

    <title>Document</title>
</head>
    <body>
        
        <h1 class="texto" id="titulo">Show do Bilhão</h1>
        <h3 class="texto">Pergunta blablalbalblalblalblALblalbalblblabla</h3>

        <div class="container text-center">
            <div class="row">
            <div class="col">
                <div id="alternativas">

                    <h6>Opção 1</h6><br>
                    <h6>Opção 2</h6><br>
                    <h6>Opção 3</h6><br>
                    <h6>Opção 4</h6>
            
                </div>
            </div>
            <div class="col">
                <div id="dados">

                    <h5>Olá <?php echo $nome?></h5><br>
                    <h5>Último login: <?php $_SESSION['finalLogin']?></h5><br>
                    <h5>Última pontuação: -1234</h5><br>
                    <button type="button" class="btn btn-dark">Sair</button>
            
                </div>
            </div>
            </div>
        </div>


    </body>
</html>