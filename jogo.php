<!DOCTYPE html>

<html>
<head>
    <title>Show do Bilhão</title>
</head>

<body>
    <div><?php 
        require "pergunta.class.php";
        require "funcoes.php";
        include "titulo.inc";

        if(!isset($_POST['pergunta'])){
            $pergunta = CarregaPergunta(0);
            Perguntar(0, $pergunta);

        }else{

            if(!isset($_POST['resposta'])){
                $pergunta = CarregaPergunta($_POST['pergunta']);
                Perguntar($_POST['pergunta'], $pergunta);

            }else if($_POST['resposta'] == $_POST['gabarito']){
                $_POST['pergunta'] += 1;
                if($_POST['pergunta'] >= 10){
                    Ganhou();
                }else{
                    $pergunta = CarregaPergunta($_POST['pergunta']);
                    Perguntar($_POST['pergunta'], $pergunta);
                }
            }else{
                Perdeu();
            }
        }
        
        include "rodape.inc";

    ?></div>
</body>
</html>