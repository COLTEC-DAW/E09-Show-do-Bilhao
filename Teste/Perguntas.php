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
            define("NUMERO_PERGUNTAS", 4);
            $cabecalho = "Cabeçalho.inc.php";
            $perguntas_inc = "Perguntas.inc.php";
            $sair = "Sair.inc.php";
            $rodape = "Rodape.inc.php";
            if(is_readable($cabecalho))
            {
                include $cabecalho;
            }
            if(is_readable($perguntas_inc))
            {
                include $perguntas_inc; 
            }
            else
            {
                echo "Erro";
                exit(1);
            }
            session_start(); 
            if ($_SERVER['REQUEST_METHOD'] === 'POST')
            {
                if(!isset($_SESSION['login']) && !isset($_SESSION['senha']))
                {
                    header('Location: Cadastro.php', TRUE, 301);
                }
            }
            if ($_SERVER['REQUEST_METHOD'] === 'GET')
            {
                if(!isset($_SESSION['login']) && !isset($_SESSION['senha'])) 
                {
                    header('Location: Cadastro.php', TRUE, 301);
                }
            }
            $acertos = $_SESSION['login'] . 'acertos';
            $questao = CarregarPergunta($_POST['pergunta'], "Perguntas.json");
            if($questao->resposta == $_POST['alternativa'])
            {
                $acertos = $_POST['pergunta'] + 1;
                setcookie($acertos, $acertos);
                if($_POST['pergunta'] == NUMERO_PERGUNTAS)
                {
                    header("Location: Ganhou.php", TRUE, 301);
                    exit(1);
                }
                $questao = CarregarPergunta($_POST['pergunta'] + 1, "Perguntas.json");
                echo "Você já acertou {$acertos} perguntas.";
            }
            else
            {
                header("Location: Perdeu.php", TRUE, 301);
            }
        ?>

        <h2><?= $questao->enunciado ?></h2>
        <form action="Perguntas.php" method="post">
            <input hidden name="pergunta" value=<?=$_POST["pergunta"] + 1?>>
            <?php
                for($j = 0; $j < count($questao->alternativas); $j++)
                {
                    echo "<div><input type='radio' id='{$j}' name='alternativa' value='{$j}'><label for='{$j}'>{$questao->alternativas[$j]}</label></div>";
                }
            ?>
            <br>
            <input type="submit" value="Enviar">
        </form
        <?php
            if (is_readable($sair))
            {
                include $sair;
            }
        ?>
        <?php
            if(is_readable($rodape))
            {
                include $rodape;
            }
        ?>
    </body>
</html>