<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Show do Bilhão</title>
</head>
<body>
    
    <?php
        require("perguntas.inc");
        $id =$_POST["id"];
        if(!$id)$id=0;
        $selecao_anterior = $_POST["selecao"];
        $correta_anterior = $respostas[$id-1];
        
        include("menu.inc");
        if( $selecao_anterior == $correta_anterior ){ //se a alternativa selecionada pelo usuário na questão anterior for igual à resposta correta da questão anterior
            $pergunta = carregaPergunta();             //cria o formulário da nova pergunta

            echo "<h3>".($id+1)."/5</h3>";
            echo "<h3>".$pergunta["enunciado"]."</h3>";
            echo "<form action=\"perguntas.php\" method=\"post\">";
            $d=1; 
            foreach($pergunta["alternativas"] as $alternativa){
                echo "<input type=\"radio\" name=\"selecao\" value=\"$d\">".$alternativa."<br>";
                $d++;
            }

            $id++;
            echo "<input type=\"hidden\" name=\"id\"  value=\"$id\" >";

            echo "<input type=\"submit\" value=\"Pŕoximo\">";
        }elseif($id==5){
            echo "<h3> Parabééns </h3>"; 
        }else{
            echo "<h3> Você errou :( </h3>"; 

        }
        include("rodape.inc");
    ?> 


</body>
</html>
