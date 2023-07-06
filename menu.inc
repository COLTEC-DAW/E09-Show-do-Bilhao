<?php
    // COloca o botão de logout caso o usuário esteja logado
    if(isset($_POST['logout']) && isset($_SESSION['loginAtual'])) {
        atualizaArquivoUsuario();
        atualizaCookieUltimaPontuacao(intval($_GET["id"])+1);
        logoutUsuario();
    }
?>

<header>
    <form method="POST">
        <?php
            if(isset($_SESSION['loginAtual'])) {
                echo "Logado como " . $_SESSION['loginAtual']->nomeReal;
                echo "</br>Pontuação máxima: " . getPontuacaoMaxima();
                echo "</br>Última pontuação: " . getUltimaPontuacao();
                echo "</br>Jogou pela última vez em " . getUltimoHorario();
                echo "</br><input type='submit' name='logout' value='Logout'/>";
            }
        ?>
    </form>
</header>