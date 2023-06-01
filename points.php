<?php
    session_start();
    $id = $_GET["id"];
    $op = $_GET["op"];
    if(!isset($_SESSION['point']) || $id == 0){
        $_SESSION['point'] = 0;
    }
    include("perguntas.php");

    $out = carregarPergunta($id);
    $resp = $out[2];
    $alt = $out[1];
    if($op == $alt[$resp]){
        echo "A resposta foi correta";
        $_SESSION['point'] ++;
    }else{
        echo "Resposta incorreta";
    }

    if($id >= 5){
        echo "A sua pontuação no teste foi ". $_SESSION['point'];
        $prox = 0;
    }else{
        $prox = $id + 1;
    }

    echo '<p><a href="/?id=' . $prox. '">
    Próxima
    </a></p>';
?>