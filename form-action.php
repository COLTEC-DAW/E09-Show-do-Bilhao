<?php
include "perguntas.inc";



$resposta = $_POST['Question'];
$id = (int)$_POST['id'];


# Apartir deste ponto, entra em cena a lógica de seu programa.
# Em outras palavras, é o que faremos com os dados recebidos.

$respostaCerta = $GLOBALS['PerguntasObj'][$id]->alternativas[$GLOBALS['PerguntasObj'][$id]->gabarito];

function checaresposta(){
    date_default_timezone_set('America/Sao_Paulo');
    $agora = date('d/m/Y H:i');
    if(strcmp($GLOBALS['resposta'], $GLOBALS['respostaCerta']) == 0){
        echo("Resposta certaa<br>");
        $ID = $GLOBALS['id'] + 2; //Isso é feito pois o ID da página é 1 inteiro maior que o do índice
                                  //aí toda vez é somado +2 a ele para se ir para a próxima pergunta
        if($ID <= $GLOBALS['numperguntas']){
            header ("location: ./perguntas.php?id=$ID"); 
        }else if($ID >= 6){
            validacookies($GLOBALS['numperguntas'], $agora);
            header ("location: ./win.html");             
        }

    }else{
        validacookies($GLOBALS['id'], $agora);
        header ("location: ./gameover.html"); 

    }
}

checaresposta();


?>