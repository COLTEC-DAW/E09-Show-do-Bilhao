<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do bilhão</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <?php 
        include "./inc/menu.inc"; 

        if(count($_GET)==0){
            $id=1;
        } else{
            $id= $_GET["id"];
        }

        include "./inc/perguntas.inc";

        $id=carregaPergunta($id);

        include "./inc/rodape.inc"; 
    ?>
</body>
</html>