<!DOCTYPE html>
<?php
session_start();

require_once "usuarios.inc";
require_once "perguntas.inc";

$action = $_POST['action'] ?? ($_GET['action'] ?? "login");

if ($action == "login") {
    if (isset($_POST['username'], $_POST['password'])) {
        if (($_POST['username'] != "") && ($_POST['password'] != "")) {
            if (Usuarios::ValidaUser($_POST['username'], $_POST['password'])) {
                $_SESSION['login'] = "SUCCESS";
                $action = "question";
                $_SESSION['name'] = Usuarios::GetUser($_POST['username'])->name;
            } else {
                $_SESSION['login'] = "ERRO_INVALID_CREDENTIALS";
            }
        } else {
            $_SESSION['login'] = "ERRO_MISSING_FIELD";
        }
    } else {
        session_destroy();
        session_start();
        $_SESSION['login'] = "SHOW";
    }
} elseif ($action == "register") {
    if (isset($_POST['name'], $_POST['email'], $_POST['username'], $_POST['password'])) {
        if (($_POST['name'] != "") && ($_POST['email'] != "") && ($_POST['username'] != "") && ($_POST['password'] != "")) {
            if (Usuarios::RegistraUser($_POST['name'], $_POST['email'], $_POST['username'], $_POST['password'])) {
                $_SESSION['register'] = "SUCCESS";
                $action = "login";
            } else {
                $_SESSION['register'] = "ERRO_INVALID_CREDENTIALS";
            }
        } else {
            $_SESSION['register'] = "ERRO_MISSING_FIELD";
        }
    } else {
        $_SESSION['register'] = "SHOW";
    }
}

?>

<html>

    <head>
        <title>O Show do Milhão</title>
    </head>

    <body>
        <?php
    include "menu.inc";
    ?>

        <div>
            <?php
        if ($action == "login") {
            include "login.html";
        } elseif ($action == "register") {
            include "register.html";
        } elseif ($action == "question") {
            include "perguntas.php";
        }

        echo "<p>";

        if (($_SESSION[$action] ?? false) == "ERRO_MISSING_FIELD") {
            echo "Todos os campos devem ser preenchidos!";
        } elseif ($_SESSION['login'] ?? false) {
            if ($_SESSION['login'] == "SHOW") {
                if (($_SESSION['register'] ?? false) == "SUCCESS") {
                    echo "Usuário registrado com sucesso!";
                }
            } elseif ($_SESSION['login'] == "ERRO_INVALID_CREDENTIALS") {
                echo "Usuário ou senha incorretos.";
            }
        } elseif (($_SESSION['register'] ?? false) == "ERRO_INVALID_CREDENTIALS") {
            echo "Nome de Usuário indisponível.";
        }

        echo "</p>";
        ?>

            <p>
                <?php
            if (!($isAllFieldsFilled ?? true)) { ?>
                Preencha todos os campos para que a ação seja realizada.
                <?php
            } elseif ($isRegisterSuccessful ?? false) { ?>
                Usuário registrado com sucesso!
                <?php
            } elseif (!($isRegisterSuccessful ?? true)) { ?>
                O nome de usuário fornecido já está em uso!
                <?php
            }
            ?>
            </p>
        </div>

        <?php
    include_once "rodape.inc";
    ?>

    </body>

</html>