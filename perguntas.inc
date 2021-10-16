
<?php
 
    function carregaPergunta($id){
        echo("<p style='color: red'>");
        exibeProgresso($id);
        echo("</p>");
        echo ("<br/> <br/>");

        $perguntas = fopen("perguntas.json", "r");
        $questoes = file_get_contents("perguntas.json");
        $questoesDecodificadas = json_decode($questoes);

        echo($questoesDecodificadas[$id]->enunciado);
        echo ("<br/> <br/>");

        for($j = 0; $j <= 3; $j++){
            echo ("<input type='radio' name='alternativa' value='$j'>"  . $questoesDecodificadas[$id]->alternativas[$j]);
            echo ("<br/> <br/>"); 
        }
        
        echo("<input type='submit' name='enviar' value='Enviar'>");

        if (isset($_POST['alternativa'])) {
            $alternativa = $_POST['alternativa'];
            verificaPergunta($id, $alternativa);
        }
        else{
            if(isset($_POST['enviar'])){
                $id = $_GET['id'];

                if(empty($_POST['alternativa'])){
                    $id = $id - 1;
                    header("Location: /ShowDoBilhao/perguntas.php?id=" . $id);
                }
            }
        }
        fclose($perguntas);
    }

    function verificaPergunta($id, $alternativa){
        $redirect = "Location: /ShowDoBilhao/perguntas.php?id=" . $id;
        $gameover = "Location: /ShowDoBilhao/gameover.php";

        $perguntas = fopen("perguntas.json", "r");
        $questoes = file_get_contents("perguntas.json");
        $questoesDecodificadas = json_decode($questoes);

        if($questoesDecodificadas[$id - 1]->resposta == $_POST['alternativa']){ 
            defineCookies($id);
            header($redirect);
            fclose($perguntas);
        }
        else{
            defineCookies($id);
            header($gameover);
            fclose($perguntas);
        }
    }

    function exibeProgresso($id){
        $progresso = $id;

        if($id == 0){

        }
        else if($id == 1){
            echo("Você acertou " . $progresso . " pergunta");
        }
        else{
            echo("Você acertou " . $progresso . " perguntas");
        }
    }

    function defineCookies($id){
        $usuario = $_SESSION['usuario'];
        $id = $id - 1;

        $data = date('d/m/Y');
    
        setcookie("ultimoJogo" . $usuario, $data);
        setcookie("pontuacao" . $usuario, $id);
    }

?>
