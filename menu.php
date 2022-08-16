<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Show do Bilhão</title>
</head>

<body>

    <div><?php 
        include "titulo.inc";
        include "funcoes.php";
        include "perguntas.inc";


        if(!isset($_POST['pergunta'])){
            Perguntar(0, $perguntas, $respostas);

        }else{
            if($gabarito[$_POST['pergunta']] == $_POST['resposta']){
                if($_POST['pergunta'] >= 2){
                    header('Location: ganhou.html');
                }else{
                    Perguntar(($_POST['pergunta'] + 1), $perguntas, $respostas);
                }
            }else{
                header('Location: perdeu.html');
            }
        }

        include "rodape.inc"
    ?></div>
    
</body>
</html>