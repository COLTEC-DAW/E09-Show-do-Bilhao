<?php require "perguntas.inc";?>
<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    global $alternativas;
    $resposta = $_POST["opcao"];
    $pergunta = $_POST["pergunta"];

    if($resposta==$alternativasCorretas[$pergunta]){
        if($pergunta==4){
            header("Location: http://localhost:8000/voceGanhou.html");
            exit;
        }else{
            $proximaPagina=$pergunta+1;
            header("Location: http://localhost:8000/perguntas.php?id=$proximaPagina");
            exit;

        }
    }else{
        header("Location: http://localhost:8000/gameOver.html");
    }
}
?>