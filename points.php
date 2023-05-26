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
        $_SESSION['point'] ++;
    }

    echo $_SESSION['point'];

    if($id == 5){
        $prox = 0;
    }else{
        $prox = $id + 1;
    }

    echo '<p><a href="/?id=' . $prox. '">
    Próxima
    </a></p>';
?>