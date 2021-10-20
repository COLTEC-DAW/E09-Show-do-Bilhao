<?php 
session_start();
include("./Question.php");

$numperguntas = 5;

$numalternativas = 4;

$json_str = file_get_contents("./perguntas.json");
$perguntas = json_decode($json_str, true);

$PerguntasObj = array();
foreach($perguntas as $pergunta){
    $newPergunta = new Question($pergunta["enunciado"], $pergunta["alternativas"], $pergunta["gabarito"]);

    $PerguntasObj[] = $newPergunta;

}

 
function mostraquestoes(){
   $GLOBALS['PerguntasObj'][0]->imprime();
} 


function validaCookies($pontuacao, $datahora){
    setcookie(("ultima-pontuacao"), $pontuacao);
    setcookie(("ultimo-login" ), $datahora);
}


function getPergunta($id){
    if($id > count($GLOBALS["PerguntasObj"]) || $id < 0){
        return "O Id" . $id . "é inválido fera";
    }
    $inicio = "<div>";
    $fim = "</div>";
    $quebralinha = '<br>';
    $forminicio = '<form action = "form-action.php" method = "post">';
    $formfinal = '</form>';
    $submit = '<input type="reset" value="Limpar"><input type="submit" value="Enviar">';


    $questao = $inicio . $GLOBALS["PerguntasObj"][$id]->enunciado . $quebralinha;

    $questao = $questao . $forminicio ;

    for($i = 0; $i < $GLOBALS["numalternativas"]; $i++){
        $questao = $questao  . '<input type="radio" name="Question" value="'. $GLOBALS['PerguntasObj'][$id]->alternativas[$i]. '">'
         . '<label>' . $GLOBALS["PerguntasObj"][$id]->alternativas[$i] . '</label'. $quebralinha . $quebralinha;
    }
    $questao = $questao . '<input type="hidden" id="id" name="id" value="' . ($id) . ' ">';

    $questao = $questao . $formfinal . $submit;


    return $questao;
}
    

?>

