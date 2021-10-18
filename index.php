<!DOCTYPE html>
<?php
require_once "usuarios.inc";

$GLOBALS['action'] = $_POST['action'] ?? ($_GET['action'] ?? "login");

if ($GLOBALS['action'] == "login")
{
    if (isset($_POST['username'], $_POST['password']))
    {
        if (($_POST['username'] != "") && ($_POST['password'] != ""))
        {
            if (Usuarios::ValidaUser($_POST['username'], $_POST['password']))
            {
                $GLOBALS['login'] = "SUCCESS";
                $GLOBALS['action'] = "question";
            }
            else
            {
                $GLOBALS['login'] = "ERRO_INVALID_CREDENTIALS";
            }
        }
        else
        {
            $GLOBALS['login'] = "ERRO_MISSING_FIELD";
        }
    }
    else
    {
        $GLOBALS['login'] = "SHOW";
    }
}
elseif ($GLOBALS['action'] == "register")
{
    if (isset($_POST['name'], $_POST['email'], $_POST['username'], $_POST['password']))
    {
        if (($_POST['name'] != "") && ($_POST['email'] != "") && ($_POST['username'] != "") && ($_POST['password'] != ""))
        {
            if (Usuarios::RegistraUser($_POST['name'], $_POST['email'], $_POST['username'], $_POST['password']))
            {    
                $GLOBALS['register'] = "SUCCESS";
                $GLOBALS['action'] = "login";
            }
            else
            {
                $GLOBALS['register'] = "ERRO_INVALID_CREDENTIALS";
            }
        }
        else
        {
            $GLOBALS['register'] = "ERRO_MISSING_FIELD";
        }
    }
    else
    {
        $GLOBALS['register'] = "SHOW";    
    }
}


?>

<html>
    <head>
        <title>O Show do Milhão</title>
    </head>
    <body>
        <?php
        include_once "menu.inc";
        ?>

        <div>
            <?php
            if ($GLOBALS['action'] == "login")
            {
                include "login.inc";
            }
            elseif ($GLOBALS['action'] == "register")
            {
                include "register.inc";
            }
            elseif ($GLOBALS['action'] == "question")
            {
                include "perguntas.php";
            }

            echo "<p>";

            if (($GLOBALS['login'] ?? null) == "SHOW")
            {
                if (($GLOBALS['register'] ?? false) == "SUCCESS")
                {
                    echo "Usuário registrado com sucesso!";
                }
            }

            if (($GLOBALS[$GLOBALS['action']] ?? null) == "ERRO_MISSING_FIELD")
            {
                echo "Todos os campos devem ser preenchidos!";
            }
            
            if (($GLOBALS[$GLOBALS['action']] ?? null) == "ERRO_INVALID_CREDENTIALS" && $GLOBALS['action'] == "login")
            {
                echo "Usuário ou senha incorretos.";
            }
            
            if (($GLOBALS[$GLOBALS['action']] ?? null) == "ERRO_INVALID_CREDENTIALS" && $GLOBALS['action'] == "register")
            {
                echo "Nome de Usuário indisponível.";
            }
            echo "</p>";
            ?>
        
        
            <p>
                <?php
                if (!($isAllFieldsFilled ?? true))
                {?>
                    Preencha todos os campos para que a ação seja realizada.
                    <?php
                }
                elseif ($isRegisterSuccessful ?? false)
                {?>
                    Usuário registrado com sucesso!
                    <?php
                }
                elseif (!($isRegisterSuccessful ?? true))
                {?>
                    O nome de usuário fornecido já está em uso!
                    <?php
                }?>
            </p>
        </div>

        <?php
        include_once "rodape.inc";
        ?>

    </body>
</html>