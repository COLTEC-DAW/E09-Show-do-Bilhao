
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

        if (isset($_GET["id"]) && (intval($_GET["id"]) >=0 && intval($_GET["id"]) < count($GLOBALS["perguntas"]))){

            carregaPergunta($_GET["id"], $perguntas, $alternativas);
            

        }else if (isset($_GET["id"]) && (intval($_GET["id"]) < 0 || intval($_GET["id"]) >= count($GLOBALS["perguntas"]))){

            echo "Esse ID é inválido";
        }

        if (!isset($_GET["id"])){

            carregaPergunta(0, $perguntas, $alternativas);
        }

        if (is_readable($rodape)) include $rodape;
    
    ?>
    
</body>
</html>