<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>Show do Bilhão</title>
    </head>
    <body>
        <?php
            $cabecalho = "Cabeçalho.inc.php";
            $perguntas_inc = "Perguntas.inc.php";
            $sair = "Sair.inc.php";
            $rodape = "Rodape.inc.php";
            if(is_readable($cabecalho)) 
            {
                include $cabecalho;
            }
            if(is_readable($perguntas_inc))
            {
                include $perguntas_inc;
            }
            else
            {
                echo "Erro";
                exit(1);
            }
            session_start();
            if($_SERVER['REQUEST_METHOD'] === 'GET')
            {
                if(!isset($_SESSION['login']) && !isset($_SESSION['senha']))
                {
                    header('Location: Entrar.php', TRUE, 301);
                }
            }    
            $agora = date('d/m/Y | h:i:sa', strtotime('-3 hours'));
            $LoginUser = $_SESSION['login'] . 'lastlogin';
            $acertos = $_SESSION['login'] . 'acertos';
            if(!isset($_COOKIE[$LoginUser]))
            {
                setcookie($LoginUser, $agora);
                echo "Bem-vindo(a) {$_SESSION['login']}";
            }
            else
            {
                echo "Bem-vindo(a) {$_SESSION['login']}, seu último login foi em {$_COOKIE[$LoginUser]}.";
                $lastLogin = date('d/m/Y | h:i:sa', strtotime('-3 hours'));
                setcookie($LoginUser, $lastLogin);
            }
            if(isset($_COOKIE[$acertos]))
            { 
                if($_COOKIE[$acertos] != 5) echo " Você havia acertado {$_COOKIE[$acertos]} na ultima tentativa";
                else echo " Você havia ganhado na ultima tentativa!";
            }
            $questao = CarregarPergunta(0, "Perguntas.json");
        ?>
        <h3><?= $questao->enunciado ?></h3>
        <form action="Perguntas.php" method="post">
            <input hidden name="pergunta" value="0">
            <?php for($j = 0; $j < count($questao->alternativas); $j++){
            echo "<div><input type='radio' id='{$j}' name='alternativa' value='{$j}'><label for='{$j}'>{$questao->alternativas[$j]}</label></div>";
            }?>
            <br>
            <input type="submit" value="Enviar">
        </form>

        <?php
        if (is_readable($sair)) include $sair;

        ?>
        <?php
        if (is_readable($rodape)) include $rodape;
        ?>
    </body>
</html>
