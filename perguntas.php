<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Show do Bilhão</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div class="pergunta">
        <!-- As perguntas serão mostradas aqui -->
    </div>

    <?php
        //Incluir arquivo que contem a funcao que carrega a pergunta
        include "perguntas.inc";
    
        if (isset($_GET['id']))
            $id = $_GET['id'];
        else
            //Se nao tiver valor nenhum, comecao pelo inicio (0)
            $id = 0;
        
        // Var proxima recebe o numero da proxima pergunta e ainda chamar funcao que carrega a pergunta em um id especifico
        $proxima = carregaPergunta($id);
        //Botao para ir para a proxima pergutna
        echo"
            <a href=\"?id=$proxima\">Próxima</a>
        ";

    ?>

</body>
</html>