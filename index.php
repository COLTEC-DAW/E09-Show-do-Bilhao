<?php 

// Perguntas
$Quests = [
    "Normalmente, quantos litros de sangue uma pessoa tem?",
    "De quem é a famosa frase “Penso, logo existo”?",
    "De onde é a invenção do chuveiro elétrico?",
    "Quantas casas decimais tem o número PI?",
    "Quanto tempo a luz do Sol demora para chegar à Terra?",
    "Qual o nome do presidente do Brasil que ficou conhecido como Jango?",
    "Como se chamam os vasos que transportam sangue do coração para a periferia do corpo?",
    "Qual a velocidade da luz?",
    'Quem é o autor de “O Príncipe”?',
    "Qual foi o recurso utilizado inicialmente pelo homem para explicar a origem das coisas?",
    "Qual o tema do famoso discurso Eu Tenho um Sonho, de Martin Luther King?",
    "As pessoas de qual tipo sanguíneo são consideradas doadores universais?"
];

// Opções
$Alternativas = [
    ["Entre 2 a 4 litros.","Entre 4 a 6 litros.","10 litros.","7 litros.","0,5 litros."],
    ["Descartes","Platão","Galileu Galilei","Sócrates","Francis Bacon"],
    ["França","Inglaterra","Brasil","Austrália","Itália"],
    ["Duas","Centenas","Vinte","Milhares","Infinitas"],
    ["12 minutos","1 dia","12 horas","8 minutos","2 segundos"],
    ["Jânio Quadros","Jacinto Anjos","Getúlio Vargas","João Figueiredo","João Goulart"],
    ["veias","átrios","ventrículos","artérias","aurículos"],
    ["300 000 000 (m/s)","150 000 000 (m/s)","199 792 458 (m/s)","299 792 458 (m/s)","30 000 000  (m/s)"],
    ["Maquiavel","Antoine de Saint-Exupéry","Montesquieu","Thomas Hobbes","Rousseau"],
    ["A Filosofia","A Biologia","A Matemática","A Astronomia","A Mitologia"],
    ["Igualdade das raças","Justiça para os menos favorecidos","Intolerância religiosa","Prêmio Nobel da Paz","Luta contra o Apartheid"],
    ["Tipo A","Tipo B","Tipo O","Tipo AB","Tipo ABO"]
];

// Opção correta
$IndexCorreta = [1,0,2,4,3,4,4,3,0,4,0,2,3];

// Retorna a string formatada com a pergunta.
function GetQuestion_Completo($index){
    $default_Inicio = "\t\t\t" . '<div class="Qcard col-4">';
    $default_Fim = "</div>\n";

    $str = $default_Inicio . $GLOBALS["Quests"][$index] . "</br>";
    
    $letras = ["A","B","C","D","E","F","G"];
    for($i=0;$i<5;$i++){
        $str = $str . $letras[$i] .") " . $GLOBALS["Alternativas"][$index][$i] . "</br>";
    }

    $str = $str . "Opção correta: " . $letras[$GLOBALS["IndexCorreta"][$index]] . ") " . $GLOBALS["Alternativas"][$index][$GLOBALS["IndexCorreta"][$index]] . "</br></br>" . $default_Fim;

    return $str;
}

// Retorna uma string formatada com todas as perguntas
function ShowAllQuests(){
    $default_Inicio = "\t\t" . '<div class="row">' . "\n";
    $default_Fim = "\t\t</div>\n";
    $format = "";

    $AuxIndex = 0;
    foreach ($GLOBALS["Quests"] as $key => $value){
        if($AuxIndex == 0){
            $format = $format . $default_Inicio;
        }else if($AuxIndex == 3){
            $format = $format . $default_Fim;
            $format = $format . $default_Inicio;
            $AuxIndex = 0;
        }
        $format = $format . GetQuestion_Completo($key);

        $AuxIndex++;
    }

    return $format . $default_Fim;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show do bilhão</title>

    <!-- Estilo do jogo -->
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
    <!-- Parte superior -->
    <div id="Cabecalho">
        <h1 id="title"> Show do Bilhão! </h1>
        <p>O Show do Bilhão é um programa idealizado pela emissora SBT (Sistema Belo-Horizontino de Televisão). Neste programa, um candidato escolhido da audiência é submetido a uma sequência de 5 perguntas de conhecimento geral. A medida em que o candidato responde cada pergunta ele avança no jogo.</p>
        <p>O jogo termina quando o candidato responde uma pergunta incorretamente. Após o término do jogo o sistema calcula a pontuação final do candidato. Sua pontuação é dada pela quantidade de perguntas respondidas corretamente pelo candidato.</p>
    </div>

    <!-- Perguntas -->
    <div class="container"> 
        <div class="Qcard col-12" id="ContainerTitle"> Questões disponíveis no sistema: </div>
<?php echo ShowAllQuests() ?>
    </div>
</body>
</html>