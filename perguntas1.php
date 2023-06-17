<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pergunta</title>
    <link rel="stylesheet" href="Styles/styles.css">
</head>
<body>
    <?php require "dadosPerguntas.inc";?>
    <?php 
        session_start();
        if(isset($_GET['id'])){
            $id= htmlspecialchars($_GET["id"]);
            $idPergunta=$id+1;
            if(isset($_SESSION['user'])){
                $pergunta=carregaPerguntas($id);
                require "Components/pergunta.inc";
            }else{
                echo"deu ruim";
            }
        }
    ?>
    
</body>
</html>