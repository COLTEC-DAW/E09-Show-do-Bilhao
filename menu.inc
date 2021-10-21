<!DOCTYPE html>
<html>

    <head>
        <title>Menu</title>
    </head>

    <body>
        <p>
            <?php
        if (isset($_SESSION['name'])) {

            $nome = $_SESSION['name'];
            echo "Bem vindo e boa sorte, $nome!<br />";
        ?>

        <form action="index.php" method="get">
            <input type="hidden" name="action" value="login" />
            <input type="submit" value="Deslogar" />
        </form>
        <?php
        } else {
            echo "O login ainda não foi realizado.<br />";
        } ?>
        </p>
    </body>

</html>