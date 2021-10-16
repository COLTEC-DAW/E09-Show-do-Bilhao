<?php 
session_start();


$array1 = [
    1 => "bar",
    2 => "foo",
];

$numperguntas = 5;

$numalternativas = 4;

$arrayper = array(
    0 =>"<p>Quem foi o navegador que chegou primeiro ao Brasil?<br>",
1=>"<p>Qual destes animais é conhecido pela habilidade de se camuflar?<br>", 
2=>"<p>Quem foi o campeão da Copa Libertadores do ano de 2013?<br>",
3=>"<p>Qual a organela celular responsável por transportar energia para as células?<br>",
4=>"<p>Qual destes renomados cientistas é considerado o pai da física quântica?<br>"
);

$arrayalt = array(
            array("(A) Pedro Álvares Cabral<br>", "(B) Cristovão Colombo<br>", "(C) Américo Vespúcio<br>", "(D) Jojo Toddynho<br>"),
            array("(A) Golfinho<br>", "(B) Cobra coral<br>",
                "(C) Lula<br>", "(D) Camaleão<br>"),
            array("(A) Cruzeiro<br>", "(B) Internacional de Porto Alegre<br>", "(C) Atlético Mineiro<br>", "(D) River Plate<p>"),
            array("(A) Ribossomos<br>", "(B) RNA<br>", "(C) Complexo de Golgi<br>", "(D) Mitocôndria<br>"),
            array("(A) Max Planck<br>", "(B) Stephen Hawking<br>", "(C) Albert Einstein<br>", 
            "(D) Ernest Rutherford</p>"));

$gabarito = array(
                0, 3, 2, 3, 0
            );


function mostraquestoes(){
    $Questoes = '';
    foreach ($GLOBALS["arrayper"] as $key => $value) {
        $Questoes = $Questoes . $value;
        for($i = 0; $i < 4; $i++){
            $Questoes = $Questoes . $GLOBALS['arrayalt'][$key][$i];
        }   
    }
    return $Questoes;
} 

function mostragabarito(){
    $Gabarito = "<h2>Gabarito: </h2>";
    $quebralinha = "<br>";
    $j = 1;
    foreach($GLOBALS['gabarito'] as $key2 => $resposta){

        $Gabarito = $Gabarito . $j . '- ';
        $Gabarito = $Gabarito . $GLOBALS['arrayalt'][$key2][$resposta];
        $j++;
    }

    return $Gabarito;
}



function getPergunta($id){

    if($id > count($GLOBALS["arrayper"]) || $id < 0){
        return "O Id" . $id . "é inválido fera";
    }

    $inicio = "<div>";
    $fim = "</div>";
    $quebralinha = '<br>';
    $forminicio = '<form action = "form-action.php" method = "post">';
    $formfinal = '</form>';
    $submit = '<input type="reset" value="Limpar"><input type="submit" value="Enviar">';


    $questao = $inicio . $GLOBALS["arrayper"][$id] . $quebralinha;

    $questao = $questao . $forminicio ;
    for($i = 0; $i < $GLOBALS["numalternativas"]; $i++){
        $questao = $questao  . '<input type="radio" name="Question" value="'. $GLOBALS['arrayalt'][$id][$i]. '">'
         . '<label>' . $GLOBALS["arrayalt"][$id][$i] . '</label'. $quebralinha;
    }

    $questao = $questao . $formfinal . $submit;

    $agora = date('d/m/Y H:i');

    return $questao;

}

//Descobre e retorna o ID da pergunta recebendo uma de suas alternativas
function getID($alternativa){
    for($i = 0; $i < 5; $i++){
        for($j = 0; $j < 4; $j++){
            if(strcmp($alternativa, $GLOBALS['arrayalt'][$i][$j]) == 0){
                return $i;
            }
        }
    }

    return -1;
}

function validaCookies($pontuacao, $datahora){
    setcookie(("ultima-pontuacao"), $pontuacao);
    setcookie(("ultimo-login" ), $datahora);
}

    




            
?>

