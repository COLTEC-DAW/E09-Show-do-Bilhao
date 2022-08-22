<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Show do Bilhão</title>
    </head>
    <body>
        <?php 
            $menu = "partials/menu.inc";
            $footer = "partials/rodape.inc";
            $questions = "partials/perguntas.inc";
        ?>
        <?php
            if (is_readable($menu)) include $menu; 
        ?>
        <?php
            //if ((isset($_GET["id"])) && (($_GET["id"]) <= count($GLOBALS["questions"])) && ($_GET["id"]) >= 0) carregaPergunta($_GET["id"]);
            //else echo "ID inválido";

            session_start();
            //session_regenerate_id();
            if(!isset($_SESSION['username'])){
                header("Location: cadastro.php");
            }

            $rightAnswers = $_COOKIE['rightAnswers'];

            if (is_readable($questions)) require $questions;
            else echo "Não foi possível carregar as perguntas.";

            $question = array_keys($questions, $_POST['question']);
            
            if($correctAnswers[$question] == $_POST['answer']){
                $rightAnswers++;
                $_COOKIE['rightAnswers'] = $rightAnswers;
                if($_POST['question'] == count($questions) - 1){
                    header("Location: ganhou.php");
                    exit(1);
                }
                carregaPergunta($_POST['question'] + 1);
                echo "Acertos: {$rightAnswers}";
            } else {
                header("Location: perdeu.php");
            }
        
            if (is_readable($logout)) include $logout;
        ?>
        <?php
            if (is_readable($footer)) include $footer;
        ?>
    </body> 
</html>