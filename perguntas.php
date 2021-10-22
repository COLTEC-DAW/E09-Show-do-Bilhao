<?php 
    require "src/perguntas.inc"; 
    include "src/rodape.inc";
    include "src/progresso.inc";
    include "src/menu.inc";
    include "src/vitoria.inc";
    include "src/derrota.inc";
    include "src/erro.inc";
    
    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <title>Show do Bilhão</title>
</head>
<body>
    <?php echo exibeMenu(); ?>
    <h1>Show do Bilhao - Perguntas</h1>
    
    <p>
        <form action="post"></form>

        <?php
        // TODO Tratar erros de $id errada

        if ($id > 0 && $id <= 5){
            if( confereResposta() ){
                if ($id <= 4){
                    echo exibeProgresso($id);
                    echo carregaPergunta($id);
                } else {
                    echo exibeProgresso($id);
                    echo exibeVitoria();
                }
            }else {
                echo exibeProgresso($id-1);
                echo exibeDerrota();
            }
        }elseif ($id == 0) {
            // Significa que essa é a primeira pergunta
            echo carregaPergunta($id);
        }
        else{
            // Significa que algo deu errado e o $id está diferente do que deveria
            echo exibeErro();
        }
         ?>

    </p>
</body>
</html>

