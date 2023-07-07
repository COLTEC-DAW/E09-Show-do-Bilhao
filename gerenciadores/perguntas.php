<?php 
include "./inc/perguntas.inc";

if(!isset($_COOKIE["pontuacao"])){
    setcookie("pontuacao", 0);
}
setcookie("ultimo-jogo", date("d/m/Y H:i:s"));

$resp_usuario = $_POST["pergunta"];
$verificar= verificaPergunta($id, $resp_usuario);

if($verificar == true && $id<=4 || $id==0){
    include "./inc/interface/form.inc";
    setcookie("pontuacao", $_COOKIE["pontuacao"]+1);
} elseif($verificar == true && $id>4){ 
    setcookie("pontuacao");           
    include "./inc/result/vencedor.inc";
} else{
    setcookie("pontuacao"); 
    include "./inc/result/gameover.inc";
}
?>