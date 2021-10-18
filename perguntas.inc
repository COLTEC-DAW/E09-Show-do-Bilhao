<?php 
session_start();
$perguntas = fopen("./perguntas.txt", "a+");

$numperguntas = 5;

$numalternativas = 4;

//Pega os dados das perguntas contidos no arquivo "perguntas.txt" e salva em arrays
$j = 0;

 while(!feof($perguntas)){

        $linha = fgets($perguntas);
        $dados = explode(",", $linha);
        $arraypertxt[] = '<p>' . $dados[0] . '<br>';
        for($i = 1; $i < $numperguntas; $i++){
                $arrayalttxt[$j][] = $dados[$i] . '<br>';
        }
        $gabaritotxt[] = (int)$dados[5];

        $j++;
}
 
function mostraquestoes(){
    $Questoes = '';
    foreach ($GLOBALS["arraypertxt"] as $key => $value) {
        $Questoes = $Questoes . $value;
        for($i = 0; $i < 4; $i++){
            $Questoes = $Questoes . $GLOBALS['arrayalttxt'][$key][$i];
        }   
    }
    return $Questoes;
} 

function mostragabarito(){
    $Gabarito = "<h2>Gabarito: </h2>";
    $quebralinha = "<br>";
    $j = 1;
    foreach($GLOBALS['gabaritotxt'] as $key2 => $resposta){

        $Gabarito = $Gabarito . $j . '- ';
        $Gabarito = $Gabarito . $GLOBALS['arrayalttxt'][$key2][$resposta];
        $j++;
    }

    return $Gabarito;
}


function validaCookies($pontuacao, $datahora){
    setcookie(("ultima-pontuacao"), $pontuacao);
    setcookie(("ultimo-login" ), $datahora);
}


function getPerguntatxt($id){
    if($id > count($GLOBALS["arraypertxt"]) || $id < 0){
        return "O Id" . $id . "é inválido fera";
    }
    $inicio = "<div>";
    $fim = "</div>";
    $quebralinha = '<br>';
    $forminicio = '<form action = "form-action.php" method = "post">';
    $formfinal = '</form>';
    $submit = '<input type="reset" value="Limpar"><input type="submit" value="Enviar">';


    $questao = $inicio . $GLOBALS["arraypertxt"][$id] . $quebralinha;

    $questao = $questao . $forminicio ;

    for($i = 0; $i < $GLOBALS["numalternativas"]; $i++){
        $questao = $questao  . '<input type="radio" name="Question" value="'. $GLOBALS['arrayalttxt'][$id][$i]. '">'
         . '<label>' . $GLOBALS["arrayalttxt"][$id][$i] . '</label'. $quebralinha;
    }
    $questao = $questao . '<input type="hidden" id="id" name="id" value="' . ($id) . ' ">';

    $questao = $questao . $formfinal . $submit;


    return $questao;
}
    

?>

