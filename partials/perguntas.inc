<?php
include "partials/menu.inc";
function carregaPergunta($id, $enunciados, $alternativas){
    $respostas = [0,3,1,0,2,0];   
    $numperguntas = 4;
    if ($id > $numperguntas){
        header("Location: /vitoria.php");
    }
    if (isset($_POST['resposta'])){
        $resposta = $_POST['resposta'];
        if ($resposta != $respostas[$id]){
            header("Location: /derrota.php");
        }
    }
    $x = $id + 1;
    echo "<form action='showdobilhao.php?id=$x' method='post'>";
    echo '<div class="col16" id="holder">';
        echo '<div class="col8" id="perguntas">';
            echo "<h3> {$enunciados[$id]} </h3>";
            echo "<ol type='A'>";
                for($y = 0; $y < count($alternativas[$id]); $y++){
                    echo '<div class="col16" id="alternativas">';
                        echo "<input type='radio' name='resposta' value='$y'>"; 
                        echo "<li>{$alternativas[$id][$y]} </li>";
                    echo "</div>";
                }
            echo "</ol>";
            echo '<div class="col16" id="enviar">';
                echo '<button type="submit">Confirmar</button>';
            echo "</div>";
            if ($resposta == $respostas[$id]){
                echo '<div class="col8" id="acertou">';
                echo "<p>Acertos: $id </p>";
                echo "</div>";
            }    
        echo "</div>";
    echo "</div>";
    echo "</form>";
    include "partials/rodape.inc";
}
function redireciona($id){
    if (!isset($id)){
        header("Location: /showdobilhao.php?id=0");
    }
}
$enunciados = [
    "Qual bicho transmite Doença de Chagas?",
    "Qual fruto é conhecido no Norte e Nordeste como jerimum?",
    "Qual é o coletivo de cães?",
    "Qual é o triângulo que tem todos os lados diferentes?",
    "Quem compôs o Hino da Independência?"
];
$alternativas = [
    ["Abelha","Barata","Pulga","Barbeiro"],
    ["Caju", "Abóbora", "Chuchu", "Coco"],
    ["Matilha", "Rebanho", "Alcateia", "Manada"],
    ["Equilátero", "Isóceles", "Escaleno", "Trapézio"],
    ["Dom Pedro I", "Manuel Bandeira", "Castro Alvez", "Carlos Gomes"]
];
$respostas = [0,3,1,0,2,0];    
?>