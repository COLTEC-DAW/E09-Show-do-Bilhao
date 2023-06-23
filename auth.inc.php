<?php
    require("question.inc.php");
    function LogIn()
    {
        echo '<div class="box login">';
        echo '<h2>Login</h2>';
        echo '<form action="/index.php" method="post">';
        echo '<label for="log">Usuario</label><br>';
        echo '<input type="text" id="username" name="username">';
        echo '<br>';
        echo '<label for="log">Senha</label><br>';
        echo '<input type="password" id="password" name="password">';
        echo '<br>';
        echo '<input class="submit-btn" type="submit" value="Entrar">';
        echo '</form>';
        echo '</div>';
    }

    function IsLogged()
    {
        $user = trim($_POST['username']);

        if(!isset($_SESSION['username']))
        {
            if(empty($user)) return false;
            else
            {
                $_SESSION['username'] = $user;
                $_SESSION['atQuestion'] = 0;
            }
        }
        Question::$_atQuestion = $_SESSION['atQuestion'];
        return true;
    }

    function CheckLogout()
    {
        echo 'TESTE';
        if(isset($_POST['logout']))
        {
            unset($_POST['logout']);
            session_destroy();
            header("Refresh:0; url=index.php");
        }
    }
?>