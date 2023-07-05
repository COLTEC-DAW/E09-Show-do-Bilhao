<?php
    if(isset($_POST['logout']) && isset($_SESSION['loginAtual'])) {
        atualizaArquivoUsuario();
        logoutUsuario();
    }
?>

<header>
    <form method="POST">
        <?php
            if(isset($_SESSION['loginAtual'])) {
                echo "Logado como " . $_SESSION['loginAtual']->nome . " (Pontuação máxima: " . $_SESSION['loginAtual']->pontuacaoMaxima . ")";
                echo "</br><input type='submit' name='logout' value='Logout'/>";
            }
        ?>
    </form>
</header>