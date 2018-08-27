<!DOCTYPE html>
<html lang="en">
<?php 
    require "classes/JsonDAO.php";
    require "classes/User.php";
    require "perguntas.php";

    session_start();
    if(!isset($_SESSION["username"])){
        session_destroy();
        header("Location: /login.php");
    } else {
        if(isset($_POST["id"])){
            $id = $_POST["id"];
        } else {
            $id = 0;
            $json = new JsonDAO("Users.json");
            $user = new User($_SESSION["username"],"","","",0);
            $json->updateUserData($user, "lastLogin", $user->lastLogin);
        }
        $pergunta = carregaPergunta($id);
        if($id==5){
            $json = new JsonDAO("Users.json");
            $user = new User($_SESSION["username"],"","","",0);
            $json->updateUserData($user, "score", $id);
            header("Location: /victory.php");
        }
        if(isset($_POST["alternativa"])){
            $perguntaAnterior = carregaPergunta($id-1);
            if(strcmp($_POST["alternativa"], $perguntaAnterior["correta"])!=0){
                $json = new JsonDAO("Users.json");
                $user = new User($_SESSION["username"],"","","",0);
                $json->updateUserData($user, "score", $id-1);
                header("Location: /gameOver.php");
            }
        }

    }
    

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Show do Big Bilho</title>
</head>
<body>
    <?php include "partials/_menuLogado.php" ?>
    <div class="container">
        <div class="progress mt-5">
          <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?= $id/5*100 ?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    </div>
    <div class="jumbotron container mt-1">
        <h1 class="text-center"><?= $pergunta["enunciado"] ?></h1>
        <form action="/game.php" method="POST">
            <input type="hidden" name="id" value="<?= $id+1 ?>" />
            <!-- alternativas -->
            <div class="container">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="alternativa" value="<?=  $pergunta["respostas"][0] ?>" checked>
                    <label class="form-check-label">
                    <?= $pergunta["respostas"][0] ?>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="alternativa" value="<?=  $pergunta["respostas"][1] ?>">
                    <label class="form-check-label">
                    <?= $pergunta["respostas"][1] ?>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="alternativa" value="<?=  $pergunta["respostas"][2] ?>">
                    <label class="form-check-label">
                    <?= $pergunta["respostas"][2] ?>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="alternativa" value="<?=  $pergunta["respostas"][3] ?>">
                    <label class="form-check-label">
                    <?= $pergunta["respostas"][3] ?>
                    </label>
                </div>
            </div>
            <button class="btn btn-primary float-right" type="submit">Proximo</button>
        </form>
    </div>
</body>
</html>