<?php
include "partials/menu.inc";
session_start();
if(!isset($_SESSION["user"])){
    $_SESSION["user"] = $_POST["user"];
}   
 
function carregaPergunta($id, $enunciados, $alternativas){
    $respostas = [0,3,1,0,2,0];   
    $numperguntas = 4;
    if (!isset($_SESSION["user"])){
        header("Location: /login.php");
    }
    if (isset($_POST['resposta'])){
        $resposta = $_POST['resposta'];
        if ($resposta != $respostas[$id]){
            header("Location: /gameover.php");
        }
    } 
    if ($id > $numperguntas){
        if ($resposta == $respostas[$id]){
            $_SESSION["premiacao"] *= 2;
        }
        header("Location: /gameover.php");
    }
    $x = $id + 1;
    echo "<form id=form action='showdobilhao.php?id=$x' method='post'>";
    echo '<div class="col16" id="holder">';
        echo '<div class="col8" id="perguntas">';
            echo "<h3> {$enunciados[$id]} </h3>";
            echo "<ol type='A'>";
                for($y = 0; $y < count($alternativas[$id]); $y++){
                    echo "<div class='col16 $y' id='alternativas'>";
                        echo "<input type='radio' name='resposta' value='$y' required='required'>"; 
                        echo "<li>{$alternativas[$id][$y]} </li>";
                    echo "</div>";
                }
            echo "</ol>";
            echo '<div class="col16" id="enviar">';
                echo '<button type="submit" id="confirmar">Confirmar</button>';
            echo "</div>";
            if(!isset($_SESSION["premiacao"]) && $id == 0) {
                $_SESSION["premiacao"] = 0;
            }   
            if (isset($_POST['resposta']) && $resposta == $respostas[$id]){
                if($id == 1) {
                    $_SESSION["premiacao"] = 62500;
                } else {
                    $_SESSION["premiacao"] *= 2;
                }    
                echo "</script>";
            }    
            $jogador = htmlspecialchars($_SESSION["user"]);
            echo '<div class="col8" id="acertou">';
            echo "<p>Usuário: $jogador </p>";
            echo "</div>";
            $premiacao = $_SESSION["premiacao"];
            echo '<div class="col8" id="acertou">';
            echo "<p>Premiação: R$ $premiacao </p>";
            echo "</div>";
            if(isset($_COOKIE['time']) && isset($_COOKIE['premiacao'])){
                $time = $_COOKIE['time'];
                $nowtime = time();
                $ultimapremiacao = $_COOKIE['premiacao'];
                function time_elapsed($secs){
                    $bit = array(
                        ' ano'        => $secs / 31556926 % 12,
                        ' semana'        => $secs / 604800 % 52,
                        ' dia'        => $secs / 86400 % 7,
                        ' hora'        => $secs / 3600 % 24,
                        ' minuto'    => $secs / 60 % 60,
                        ' segundo'    => $secs % 60
                        );
                    foreach($bit as $k => $v){
                        if($v > 1)$ret[] = $v . $k . 's';
                        if($v == 1)$ret[] = $v . $k;
                        }
                        if($secs > 60) array_splice($ret, count($ret)-1, 0, 'e');    
                    $ret[] = 'atrás.';
                    return join(' ', $ret);
                }
                echo '<div class="col8" id="acertou">';
                $timepast = time_elapsed($nowtime-$time);
                echo "<p> Último jogo: $timepast </p>";
                echo "</div>";
                echo '<div class="col8" id="acertou">';
                echo "<p> Última premiação: $ultimapremiacao </p>";
                echo "</div>";
            }
            echo "</div>";
    echo "</div>";
    echo "</form>";
    echo '<div class="col1" id="logoff">';
    echo '<form method="post">';
    echo '<button type="submit" name="logoff">Sair</button>';
    echo "</form>";
    echo "</div>";
    echo "</div>";
    if (isset($_POST["logoff"])){
        session_destroy();
        header("Location: /login.php");
    }
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