<?php 
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
    foreach ($array as $key => $value) {
        echo("$value");
        for($i = 0; $i < 4; $i++){
            echo($arrayalt[$key][$i]);
        }
    }
} 

function mostragabarito(){
    echo("<p>Gabarito: </p>");
    $j = 1;
    foreach($gabarito as $key2 => $resposta){

        echo("$j :");
        echo($arrayalt[$key2][$resposta]);
        $j++;
    }
}



function getPergunta($id){

    if($id > count($GLOBALS["arrayper"]) || $id < 0){
        return "O Id" . $id . "é inválido fera";
    }

    $inicio = "<div>";
    $fim = "</div>";
    $quebralinha = '<br>';

    $questao = $inicio . $GLOBALS["arrayper"][$id] . $quebralinha;

    for($i = 0; $i < $GLOBALS["numalternativas"]; $i++){
        $questao = $questao . $GLOBALS["arrayalt"][$id][$i] . $quebralinha;
    }

    return $questao;

}
            
?>

