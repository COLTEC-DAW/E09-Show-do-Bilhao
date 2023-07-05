<?php
    require('user.inc.php');
    $loggedIn = false;
    $atMenu = true;
    function LogScreen()
    {
        echo '<div class="box login">';
        echo '<h2>Login</h2>';
        echo '<form action="/login.php" method="post">';
        echo '<label for="log">Nome de login</label><br>';
        echo '<input type="text" id="username" name="username">';
        echo '<br>';
        echo '<label for="log">Senha</label><br>';
        echo '<input type="password" id="password" name="passwd">';
        echo '<br>';
        echo '<input class="submit-btn" type="submit" value="Entrar">';
        echo '</form>';
        echo '</div>';
    }
    function SingScreen()
    {
        echo '<div class="box login">';
        echo '<h2>Cadastrar</h2>';
        echo '<form action="/singup.php" method="post">';
        echo '<label for="log">Nome de jogo</label>';
        echo '<br>';
        echo '<input type="text" id="nickname" name="nickname">';
        echo '<br>';
        echo '<label for="log">Nome de login</label>';
        echo '<br>';
        echo '<input type="text" id="username" name="username">';
        echo '<br>';
        echo '<label for="log">Email</label>';
        echo '<br>';
        echo '<input type="text" id="email" name="email">';
        echo '<br>';
        echo '<label for="log">Senha</label>';
        echo '<br>';
        echo '<input type="password" id="password" name="passwd">';
        echo '<br>';
        echo '<input class="submit-btn" type="submit" value="Registrar">';
        echo '</form>';
        echo '</div>';
    }

    function LogUser()
    {
        global $loggedIn;
        if(!isset($_POST['username'])) return 0;

        $user = trim($_POST['username']);
        $pswd = trim($_POST['passwd']);
        if(Check_UserExists($user, $pswd) == true)
        {
            $loggedIn = true;
            RedirectToGame($user);
        }
        else return 1;
    }
    function RedirectToGame($username)
    {
        global $atMenu;
        $user = User::GetUser($username);
        $_SESSION['username'] = $user->username.'';
        $_SESSION['atQuestion'] = $user->atQuestion.'';

        header("location:game.php");
    }

    function CheckLogout()
    {
        global $loggedIn;
        global $atMenu;
        if(isset($_POST['logout']))
        {
            unset($_POST['logout']);
            User::SaveUser(trim($_SESSION['username']));
            session_destroy();
            header("location:index.php");
        }
    }

    function SingUp()
    {
        $name = trim($_POST['username']);
        if(empty($name)) return 0;

        $nick = trim($_POST['nickname']);
        if(empty($nick)) return 1;
        $email = trim($_POST['email']);
        if(empty($email)) return 1;
        $pswd = trim($_POST['passwd']);
        if(empty($pswd)) return 1;

        $users = User::LoadUsers();
        foreach($users as $user)
        {
            if($user->CheckName($name)) return 2;
        }

        User::WriteUser(new User($name, $nick, $email, $pswd));
        header("location:index.php");
    }

    function Check_UserExists($username, $passwd)
    {
        $users = User::LoadUsers();
        foreach($users as $user)
        {
            if($user->CheckName($username) and $user->CheckPasswd($passwd))
                return true;
        }
        return false;
    }
?>