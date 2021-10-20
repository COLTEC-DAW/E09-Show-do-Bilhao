<?php 

$Perguntas = [
    "Quais o menor e o maior país do mundo?",
    "Atualmente, quantos elementos químicos a tabela periódica possui?",
    "Quais as duas datas que são comemoradas em novembro?",
    "Quanto tempo a luz do Sol demora para chegar à Terra?",
    "Qual a altura da rede de vôlei nos jogos masculino e feminino?"
];

$Alternativas = [
    ["Vaticano e Rússia","Nauru e China","Mônaco e Canadá","Malta e Estados Unidos","São Marino e Índia"],
    ["113","109","108","118","92"],
    ["Independência do Brasil e Dia da Bandeira","Proclamação da República e Dia Nacional da Consciência Negra","Dia do Médico e Dia de São Lucas","Dia de Finados e Dia Nacional do Livro","Black Friday e Dia da Árvore"],
    ["12 minutos","1 dia","12 horas","8 minutos","47 segundos"],
    ["2,4 para ambos","2,5 m e 2,0 m","1,8 m e 1,5 m","2,45 m e 2,15 m","2,43 m e 2,24 m"]
];
    
$IndexRespostas = [0,3,1,3,4];
$LetrasAlternativas = ["A-","B-","C-","D-","E-"];
$teste = 0;

function GetPergunta($index){
    // Declarando as variáveis globais que serão utilizadas
    global $Perguntas;
    global $LetrasAlternativas;
    global $Alternativas;

    $inicioDefault = "<br><hr><br> ";
    $string = $inicioDefault . $Perguntas[$index] . '<br>';
    
    // Loop para adicionar as alternativas à string final
    for ($count = 0; $count < 5; ++$count){
        $string .= $LetrasAlternativas[$count] . " ";
        $string .= $Alternativas[$index][$count] . '<br>';
    }

    return $string;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do Bilhão</title>
</head>
<body>
    <h1>Show do Bilhao</h1>
    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis voluptates deserunt nam quisquam veritatis laborum? Eveniet placeat provident accusantium dolore optio voluptates neque temporibus animi cumque est, aut cum? Impedit. </p>
    <p>
        <?php echo GetPergunta(0) ?>
    </p>
</body>
</html>