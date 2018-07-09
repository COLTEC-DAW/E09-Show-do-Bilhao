<!DOCTYPE html>

<?php require "php/perguntas.php"; ?>
<?php require "php/leitorJson.php"; ?>

<?php

?>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/master.css">
        <link href="https://fonts.googleapis.com/css?family=Merriweather|Montserrat|Open+Sans+Condensed:300" rel="stylesheet">

        <title></title>
    </head>
    <body>
        <?php include "components/menu.inc"; ?>


        <?php
            //Inicia sessao
            session_start();
            //Verifica se ja ta logado
            if(!$_SESSION["login"]) {
                //Pega dados de login
                $login = $_POST["login"];
                $senha = $_POST["senha"];



            } else {
                $login = $_SESSION["login"];
                $senha = $_SESSION["senha"];
            }
            if(!$login) {
                //Redireciona para login
                header("Location: php/login.php");
            } else if(validar($login, $senha)) {
                //Loga na sessao
                $_SESSION["login"] = $login;
                $_SESSION["senha"] = $senha;

                //Pega cookies
                $id = $_COOKIE["id"];

                if(!$id) {
                    $id = 0;
                }

                if (isset($_POST['id'])) {
                    $id = $_POST['id'];
                    $clicked = $_POST["clicked"];

                } else {
                    $id = -1;
                    $clicked = 0;

                }
                $id++;
                $dados = carregaPergunta($id);

                $lastScore = $_COOKIE["lastScore"];
				$lastDate = $_COOKIE["lastDate"];

                if($id == 0 || verificaPergunta($id, $clicked) == true){
                    include "components/quiz.inc";
                }
            }  else {
				echo "<h2>Login ou senha incorretos</h2>";
				echo "<a href='/php/login.php'>Tentar Novamente</a>";
			}
        ?>
       <?php include "components/rodape.inc"; ?>



    </body>
</html>
