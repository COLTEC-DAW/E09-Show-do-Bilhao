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
        $pontuacao = htmlspecialchars($_POST["pontuacao"]);

        $pontuacao++;
        
        if($resposta==$alternativasCorretas[$pergunta]){
            $usuario=new User();

            $usuario=criaUsuario($usuario, $_SESSION['user'], $_SESSION['senha'], $pontuacao);
            setcookie("usuario", json_encode($data), time() + 3600);
            if($pergunta==sizeof($enunciados)-1){
                require "Pages/voceGanhou.php";
            }
            else{
                $id=$pergunta+1;
                $pergunta= carregaPerguntas($id);
                require "Components/pergunta.inc";
            }
        }else if($pergunta==0){
            $pontuacao=0;
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