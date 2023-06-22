<?php 
require "dadosPerguntas.inc";
?>
<?php 
require "Models/User.inc";
?>

<?php 
session_start();
if(isset($_SESSION['user'])){

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        global $alternativas;
        global $enunciados;
        $resposta =  htmlspecialchars($_POST["opcao"]);
        $pergunta = htmlspecialchars($_POST["pergunta"]);

        if($resposta==$alternativasCorretas[$pergunta]){
            $usuario->pontuacao++;
            echo $usuario->pontuacao;
            if($pergunta==sizeof($enunciados)-1){
                require "Pages/voceGanhou.php";
            }
            else{
                $id=$pergunta+1;
                $pergunta= carregaPerguntas($id);
                require "Components/pergunta.inc";
            }
        }else if($pergunta==0){
            $_SESSION["usuario"]=criaUsuario($usuario, $_SESSION["user"], $_SESSION["senha"], 0);//ao inves de guardar em variaveis diferentes senha e user, guardar objeto lá junto com pontuação
            $id=0;
            $pergunta= carregaPerguntas($id);
            require "Components/pergunta.inc";
        }
        else{
            require "Pages/gameOver.html";
        }
    }
}else{
    require "index.php";
}
?>