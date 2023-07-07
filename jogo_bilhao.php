<!DOCTYPE html>

<?php

 $num_pergunta = 0;
 $pontuacao = 0;


session_start();

require_once 'login.inc';


if (isset($_SESSION["verificadorLogin"])) {

    $ultima_sessao = $_COOKIE['ultima_sessao'];
    // logado
} else {

    // nao logado

    if (isset($_POST['nome'])) {

        // Tenta logar o usuario
        $nome = htmlspecialchars($_POST["nome"]);
        $senha = htmlspecialchars($_POST["senha"]);
        $_SESSION["nome"] = $nome;
        $ultima_sessao = date('d/m/Y | h:i');
        setcookie("ultima_sessao", $ultima_sessao);

        $verificador = verificaUsuario($nome, $senha, "usuarios.json");

        // erro ao logar
         if($verificador == 1){
            header("Location: login.php");
        } else{
            $_SESSION["verificadorLogin"] = 1;
        }

    }else{
        $ultima_sessao = $_COOKIE['ultima_sessao'];

    }
}

?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>

    <?php

    require_once 'perguntas_bilhao.inc';

    $numPergunta = 0;
    $_SESSION["numPergunta"] = $numPergunta;

    $dados = carregaQuestao($num_pergunta, "perguntas.json");

    $_SESSION["resposta"] = $dados->resposta;
    $pontuacao = $num_pergunta;
    $_SESSION["pontuacao"] = $pontuacao;

    ?>

    <h1>TM's Billion</h1>
    <h3>
        <?= $dados->pergunta ?>
    </h3>

    <div>
        <div>
            <div>
                <div>

                    <form action="proximaPagina.php" method="POST">

                        <input type="radio" name="resposta" value="0">
                        <?= $dados->alternativas[0] ?></input><br><br>
                        <input type="radio" name="resposta" value="1">
                        <?= $dados->alternativas[1] ?></input><br><br>
                        <input type="radio" name="resposta" value="2">
                        <?= $dados->alternativas[2] ?></input><br><br>
                        <input type="radio" name="resposta" value="3">
                        <?= $dados->alternativas[3] ?></input><br><br>

                        <button type="submit">ENVIAR</button>

                </div>

                </form>
            </div>
            <div>
                <div>

                    <h5>Olá
                        <?= $nome ?>
                    </h5>
                    <h5>Último login:
                        <?php echo $ultima_sessao; ?>
                    </h5>
                    <h5>Última pontuação:
                        <?= $_COOKIE["ultima_pontuacao"] ?>
                    </h5>
                    <h5>Pontuação:
                        <?= $pontuacao ?>
                    </h5>

                    <form action='sair.php'>
                        <button type="submit">Sair</button>
                    </form>

                </div>
            </div>
        </div>
    </div>


</body>

</html>