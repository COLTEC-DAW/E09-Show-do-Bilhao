<!DOCTYPE html>
<?php require "php/perguntas.php"; ?>
<?php
    session_start();
    $sair =  $_COOKIE['sair'];
    //Tratamento de redirecionamento

    //Tratarmento do Login
    if (isset($_POST['email']) && isset($_POST['passsword'])) {
        $email = $_POST['email'];
        $senha = $_POST['password'];
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $senha;
        setcookie("sair", 1);
    } else {
      if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])) {
        setcookie ("sair", 0);
        header('Location: /login.php');
      }
      setcookie ("sair", 1);
    }
    
    //Tratamento do id
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    } else {
        $id = 0;
    }
    $dados = carregaPergunta($id);

    //Tratamento da alternativa
    if (isset($_POST['alternativa'])) {
        $alternativa = $_POST['alternativa'];
        verificaPergunta($id, $alternativa);
    }
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Show do Milhão</title>
</head>
<body>
    <?php include "./php/partials/_menu.php" ?>
    <div class="container">
    <div class="progress">
      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?= $id/5*100 ?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
        <div class="jumbotron mt-1">
                <h1 class="text-center"><?= $dados[0]; ?></h1>
                <form class="" action="/index.php" method="POST">
                    <input type="hidden" name="id" value="<?= $id+1 ?>" />
                    <!-- alternativas -->
                    <div class="container">
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="alternativa" value="<?= $dados[1][0] ?>" checked>
                          <label class="form-check-label">
                            <?= $dados[1][0] ?>
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="alternativa" value="<?= $dados[1][1] ?>">
                          <label class="form-check-label">
                            <?= $dados[1][1] ?>
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="alternativa" value="<?= $dados[1][2] ?>">
                          <label class="form-check-label">
                            <?= $dados[1][2] ?>
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="alternativa" value="<?= $dados[1][3] ?>">
                          <label class="form-check-label">
                            <?= $dados[1][3] ?>
                          </label>
                        </div>
                    </div>
                    <button class="btn btn-primary float-right" type="submit">Proximo</button>
                </form>
        </div>
    </div>
    <?php include "./php/partials/_rodape.php" ?>
</body>
</html>