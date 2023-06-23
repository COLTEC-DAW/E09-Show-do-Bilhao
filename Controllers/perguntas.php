<?php 
require "../Models/Perguntas.inc";
?>
<?php 
require "../Models/User.inc";
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

        if($resposta==null){

            $id=0;
            $pontuacao=0;
            $pergunta= carregaPerguntas($id);
            require "../Components/pergunta.inc";

        }else if($resposta==$alternativasCorretas[$pergunta]){

            $pontuacao++;
       
            if($pergunta==sizeof($enunciados)-1){
                criaUsuarioECookie($_SESSION["user"],$_SESSION["senha"], $pontuacao );
                require "../Pages/voceGanhou.php";
            }
            else{
                $id=$pergunta+1;
                $pergunta= carregaPerguntas($id);
                require "../Components/pergunta.inc";
            }
        }else{
            criaUsuarioECookie($_SESSION["user"],$_SESSION["senha"], $pontuacao );
            require "../Pages/gameOver.php";
        }
    }
}else{
    require "../index.php";
}
?>