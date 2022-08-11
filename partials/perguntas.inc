<?php
include "partials/menu.inc";
function carregaPergunta($id, $enunciados, $alternativas){
    $x = $id + 1;
    $resp = $_POST['resposta'];
    echo "<form action='pergunta.php?id=$x' method='post'>";
    $x++;
    echo '<div class="col16" id="holder">';
        echo '<div class="col8" id="perguntas">';
            echo "<h3> {$enunciados[$id]} </h3>";
            echo "<ol type='A'>";
                for($y = 0; $y < count($alternativas[$id]); $y++){
                    echo '<div class="col16" id="alternativas">';
                        echo "<input type='radio' name='resposta' value='$y'> <li>{$alternativas[$id][$y]} </li>";
                    echo "</div>";
                }
            echo "</ol>";
            echo '<div class="col16" id="enviar">';
                echo '<button type="submit">Confirmar</button>';
            echo "</div>";
        echo "</div>";
    echo "</div>";
    echo "</form>";
    include "partials/rodape.inc";
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
$respostas = [3,1,0,2,0];    
?>