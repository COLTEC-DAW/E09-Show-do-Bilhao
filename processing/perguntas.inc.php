<?php
    $perguntas = array(
    "Qual é o professor de DAW?",
    "Qual é a cor do céu?",
    "Quantos dígitos tem um CEP?",
    "Quem é Zinchenko?",
    "Tem cabaré essa noite?"
    ); 
    
    $alternativas = array(
        ["a) Jemaf","b) João","c) Prates","d) Daniel"],
        ["a) Preto","b) Branco","c) Amarelo","d) Azul"],
        ["a) 0","b) 8","c) 6","d) 12"],
        ["a) Virgínia","b) Thales","c) Arthur","d) Gabi"],
        ["a) Claro","b) Talvez","c) Não sei","d) Não"]
    );
    
    $respostas = array("1","4","2","3","1");

    if (((int)$_GET['id'] +1) > count($perguntas) ){
        header ("location:../pages/voceGanhou.php");
    }

function carregaPergunta(){
    global $perguntas; 
    
    $id = $_GET['id'] ?? 0;
    
    echo $perguntas[$id];
}

function carregaAlternativa($i){
    global $alternativas;

    $id = $_GET['id'] ?? 0;

    echo $alternativas[$id][$i];
}

function checarResposta (){
    global $perguntas;
    global $respostas;

    if (!isset($_POST['alt'])) {
        return false;
    }

    $respostaUsuario = trim($_POST['alt']);
    $numeroQuestao = (int)$_GET['id'];
    
    for ($i=0; $i < count($perguntas); $i++) { 
        if($i == ($numeroQuestao-1)){
            if($respostas[$i] != $respostaUsuario){
                header ("location:../pages/gameover.inc.php");
            }
        }
    }

}
?>