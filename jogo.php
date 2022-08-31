<!DOCTYPE html>

<html>
<head>
    <title>Show do Bilhão</title>
</head>

<body>
    <div><?php 
        include "funcoes.php";
        include "perguntas.inc";

        if(!isset($_POST['user'])){
            Login();
    
        }else{
            session_start();
            $_SESSION['user'] = $_POST['user'];

            include "titulo.inc";

            if(!isset($_POST['pergunta'])){
                Perguntar(1, $perguntas, $respostas);

            }else{
                $_SESSION['pergunta'] = $_POST['pergunta'];

                if($gabarito[$_POST['pergunta']] == $_POST['resposta']){
                    if($_POST['pergunta'] >= 3){
                        Ganhou();
                    }else{
                        Perguntar(($_POST['pergunta'] + 1), $perguntas, $respostas);
                    }
                }else if($_POST['resposta'] == "voltar"){
                    Perguntar(($_POST['pergunta'] + 1), $perguntas, $respostas);

                }else{
                    Perdeu();
                }
            }
            
            include "rodape.inc";
        }
    ?></div>
</body>
</html>