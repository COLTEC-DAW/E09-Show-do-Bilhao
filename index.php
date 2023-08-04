<?php include("menu.inc"); ?>

<body>
    <h3> Seja bem vindo ao jogo <strong>Show do Milhao</strong>! </h3>
    <p> <em> explicação </em>: O Show do Bilhão é um programa idealizado pela emissora SBT (Sistema Belo-Horizontino de
        Televisão). Neste programa, um candidato
        escolhido da audiência é submetido a uma sequência de 5 perguntas de conhecimento geral. A medida em que o
        candidato responde
        cada pergunta ele avança no jogo. O jogo termina quando o candidato responde uma pergunta incorretamente. Após o
        término do jogo
        o sistema calcula a pontuação final do candidato. Sua pontuação é dada pela quantidade de perguntas respondidas
        corretamente pelo
        candidato. O proprietário da emissora requisitou que você desenvolvesse uma aplicação web que gerencie as
        perguntas do jogo.
        Mais especificamente, esse sistema irá fazer o controle das respostas do jogo.
    </p>

    <?php
    // Verificar se os cookies estão definidos
    if (isset($_COOKIE['ultima_pontuacao']) && isset($_COOKIE['ultima_acesso'])) {
        $ultimaPontuacao = $_COOKIE['ultima_pontuacao'];
        $ultimaAcesso = $_COOKIE['ultima_acesso'];

        echo "<p>Última Pontuação: " . $ultimaPontuacao . "</p>";
        echo "<p>Último Acesso: " . $ultimaAcesso . "</p>";
    }
    ?>

    <form method="POST" action="login.php">
        <fieldset>
            <p>
                <label> Login </label>
            </p>
            <input type="text" name="login" id="login" value="">
            <p>
                <label> Senha </label>
            </p>
            <input type="password" name="senha" id="senha" value="">
            <br>
            <br>
            <input type="submit" name="logar" value="Login">
            <input type="submit" name="registrar" value="Resgistrar">

        </fieldset>
    </form>

    <?php include("rodape.inc"); ?>
</body>

</html>