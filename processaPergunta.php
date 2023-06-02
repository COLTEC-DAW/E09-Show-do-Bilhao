<?php require "dadosPerguntas.inc";?>
<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    global $alternativas;
    $resposta =  htmlspecialchars($_POST["opcao"]);
    $pergunta = htmlspecialchars($_POST["pergunta"]);

    if($resposta==$alternativasCorretas[$pergunta]){
        if($pergunta==4){
            require "voceGanhou.html";
        }else{
            $id=$pergunta+1;
            $pergunta= carregaPerguntas($id);
            require "pergunta.inc";
        }
    }else{
        require "gameOver.html";
    }
}
?>