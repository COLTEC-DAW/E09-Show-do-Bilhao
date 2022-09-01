<?php
require "question.php";
function load_question($id, $fileName){
    $file = json_decode(file_get_contents($fileName));
    return new Question($file[$id]->question, $file[$id]->options, $file[$id]->answer);
}
/*function load_question($id) {
    $questions = [
        "Normalmente, quantos litros de sangue uma pessoa tem? Em média, quantos são retirados numa doação de sangue?",
        "De quem é a famosa frase “Penso, logo existo”?",
        "Quais o menor e o maior país do mundo?",
        "Atualmente, quantos elementos químicos a tabela periódica possui?",
        "Quais os países que têm a maior e a menor expectativa de vida do mundo?: "
    ];
    $options = [
        ["Tem entre 2 a 4 litros. São retirados 450 mililitros","Tem entre 4 a 6 litros. São retirados 450 mililitros","Tem 10 litros. São retirados 2 litros","Tem 7 litros. São retirados 1,5 litros"],
        ["Platão", "Galileu Galilei", "Descartes", "Sócrates"],
        ["Vaticano e Rússia", "Nauru e China", "Mônaco e Canadá", "Malta e Estados Unidos"],
        ["113", "109", "108", "118"],
        ["Japão e Serra Leoa", "Austrália e Afeganistão", "Itália e Chade", "Brasil e Congo"]
    ];
    $answers = [1,2,0,3,0];

    return array(
        "question" => $questions[$id],
        "options" => $options[$id],
        "answer" => $answers[$id]
    );
}*/

?>
