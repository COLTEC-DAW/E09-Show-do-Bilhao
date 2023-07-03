
<?php

if (isset($_SESSION['user'])) {
    require "../Models/Perguntas.inc";
    require "../Models/UserCookie.inc";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $imprimePergunta = false;
        global $alternativas;
        global $enunciados;
        global $perguntas;

        $resposta =  htmlspecialchars($_POST["opcao"]);
        $perguntaPost = htmlspecialchars($_POST["pergunta"]);
        $pontuacao = htmlspecialchars($_POST["pontuacao"]);

        if ($resposta == $perguntas[$perguntaPost]['resposta']) {
            $pontuacao++;
            $imprimePergunta=true;
            if ($perguntaPost == sizeof($perguntas) - 1) {
                criaUsuarioECookie($_SESSION["user"], date('d/m/Y h:i:s'), $pontuacao);
                require "../Pages/voceGanhou.php";
            } else {
                $id = $perguntaPost + 1;
                $pergunta=new Pergunta();
                $pergunta->carregaPerguntas($id, $perguntas);
            }
        } else {
            criaUsuarioECookie($_SESSION["user"], date('d/m/Y h:i:s'), $pontuacao);
            require "../Pages/gameOver.php";
        }
    } else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $imprimePergunta=true;
        $id = 0;
        $pontuacao = 0;
        $pergunta=new Pergunta();
        $pergunta->carregaPerguntas($id, $perguntas);
    }
} else {
    require "../index.php";
}

?>