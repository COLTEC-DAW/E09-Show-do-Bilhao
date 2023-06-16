<?php
    require("question.inc.php");
    function LogIn()
    {
        echo '<div class="box login">';
        echo '<h2>Login</h2>';
        echo '<form action="/game.php" method="post">';
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

    function ValidateLogIn()
    {
        $user = trim($_POST['username']);
        if(empty($user))
        {
            return false;
        }

        if(!isset($_SESSION['atQuestion']) || !isset($_SESSION['username']))
        {
            $_SESSION['name'] = $user;
            $_SESSION['atQuestion'] = 0;
        }
        Question::$_atQuestion = $_SESSION['atQuestion'];
        echo 'morreu';
        return true;
    }
?>