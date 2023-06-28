<?php
require "../Models/Perguntas.inc";
?>
<?php
require "../Models/User.inc";
?>
<?php
session_start();

if (isset($_SESSION['user'])) {

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        global $alternativas;
        global $enunciados;
        global $perguntas;
        $resposta =  htmlspecialchars($_POST["opcao"]);
        $perguntaPost = htmlspecialchars($_POST["pergunta"]);
        $pontuacao = htmlspecialchars($_POST["pontuacao"]);

        if ($resposta == $perguntas[$perguntaPost]['resposta']) {
            $pontuacao++;
            if ($perguntaPost == sizeof($perguntas) - 1) {
                criaUsuarioECookie($_SESSION["user"], date('d/m/Y h:i:s'), $pontuacao);
                require "../Pages/voceGanhou.php";
            } else {
                $id = $perguntaPost + 1;
                $pergunta = carregaPerguntas($id, $perguntas);
            }
        } else {
            criaUsuarioECookie($_SESSION["user"], date('d/m/Y h:i:s'), $pontuacao);
            require "../Pages/gameOver.php";
        }
    } else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $id = 0;
        $pontuacao = 0;
        $pergunta = carregaPerguntas($id, $perguntas);
    }
} else {
    require "../index.php";
}
?>