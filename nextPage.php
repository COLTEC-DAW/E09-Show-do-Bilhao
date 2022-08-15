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

        $conteudo = 'perguntas.php';
        $menu = "menu.inc";
        $enunciados = "perguntas.inc";
        $rodape = "rodape.inc";

        if (is_readable($conteudo)) include $conteudo;
        if (is_readable($menu)) include $menu;
        if (is_readable($enunciados)) include $enunciados;

        session_start();

        if($gabarito[$_POST['question']] == $_POST['answer']){

            if($_POST['question'] == count($perguntas) - 1){

                header("Location: ganhou.php");

            }

            carregaPergunta($_POST['question'] + 1, $perguntas, $alternativas);
            $acertadas = $_POST['question'] + 1;
        
            echo "<br>Acertou {$acertadas} perguntas!!!";

        } else {

            header("Location: perdeu.php");
        }

        echo "<form action='logout.php' method='GET'>
        <br>    
        <button type='submit'>Log-Out</button>
        </form>";


        if (is_readable($rodape)) include $rodape;
    
    ?>
    
</body>
</html>