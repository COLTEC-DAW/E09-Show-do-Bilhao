    <?php

    if (isset($_SESSION['logado']['login'])) {
        if (isset($_COOKIE[$_SESSION['logado']['login'] . "tempo"])) { ?>
            <h1>Última sessão: <?= $_COOKIE[$_SESSION['logado']['login'] . "tempo"] ?> -
            <?php } ?>

            <?php if (isset($_COOKIE[$_SESSION['logado']['login'] . "lastScore"])) { ?>
                Última pontuação: <?= $_COOKIE[$_SESSION['logado']['login'] . "lastScore"] ?> -

            <?php }

            if (isset($_SESSION['logado'])) { ?>
                Melhor pontuação: <?=$_SESSION['logado']['recorde'] ?></h1>
    <?php }
        } ?>