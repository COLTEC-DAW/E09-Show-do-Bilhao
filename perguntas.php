<?php require "dadosPerguntas.inc";?>
<?php 
session_start();
if(isset($_SESSION['user'])){

    if ($_SERVER["REQUEST_METHOD"] === "GET"){

        $id= htmlspecialchars($_GET["id"]);
        $idPergunta=$id+1;
        $pergunta=carregaPerguntas($id);
        require "Components/pergunta.inc";

    }else if($_SERVER["REQUEST_METHOD"] === "POST"){
        global $alternativas;
        $resposta =  htmlspecialchars($_POST["opcao"]);
        $pergunta = htmlspecialchars($_POST["pergunta"]);
    
        if($resposta==$alternativasCorretas[$pergunta]){
            if($pergunta==4){
                require "Pages/voceGanhou.php";
            }else{
                $id=$pergunta+1;
                $pergunta= carregaPerguntas($id);
                require "Components/pergunta.inc";
            }
        }else{
            require "Pages/gameOver.html";
        }
    }
}else{
    require "index.php";
}
?>