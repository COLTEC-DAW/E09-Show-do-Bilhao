<?php
    ob_start(); // Initiate the output buffer
?>


<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
        <title>O Show do Bilhão</title>
    </head>

    <body>
        
        <?php
            
            session_start();

            if(!isset($_SESSION["login"]) && !isset($_SESSION["senha"])){ //confere se ta logado
                header('Location: index.php');
            }
            
            require 'perguntas.inc';

            $id = $_GET["id"];
            setcookie("n_id", $id);

            $aux = carregaResposta($id);
            setcookie("rsp", $aux);

            if(file_exists("perguntas.json")){

                $dados = file_get_contents('perguntas.json');
                $json = json_decode($dados);
                carregaPergunta($json[$id], $id);

            }



            echo "<p>Pontuação: " . $id . "</p><br><br>";          
            echo "<br><br><a class='btn btn-primary btn-large' href='logout.php'>Logout</a><br><br>";

            require 'rodape.inc';            

        ?>



    </body>
</html>