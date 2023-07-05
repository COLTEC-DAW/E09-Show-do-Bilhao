<?php
    require('user.inc.php');
    $loggedIn = false;
    $atMenu = true;
    function LogScreen()
    {
        echo '<div class="box login">';
        echo '<h2>Login</h2>';
        echo '<form action="/login.php" method="post">';
        echo '<label for="log">Usuario</label><br>';
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
        echo '<label for="log">Usuario</label><br>';
        echo '<input type="text" id="username" name="username">';
        echo '<br>';
        echo '<label for="log">Senha</label><br>';
        echo '<input type="password" id="password" name="passwd">';
        echo '<br>';
        echo '<input class="submit-btn" type="submit" value="Registrar">';
        echo '</form>';
        echo '</div>';
    }

    function LogUser()
    {
        global $loggedIn;
        if(!isset($_POST['username'])) return false;

        $user = trim($_POST['username']);
        $pswd = trim($_POST['passwd']);
        if(Check_UserExists($user, $pswd) == true)
        {
            $loggedIn = true;
            RedirectToGame($user);
        }
        else return "Usuario inexistente!";
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
        $user = trim($_POST['username']);
        if(empty($user)) return false;

        $pswd = trim($_POST['passwd']);
        if(empty($pswd)) return false;
        if(Check_UserExists($user, $pswd) == true) return false;

        User::WriteUser(new User($user, $pswd));
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

    function Check_SignUp()
    {
        if(isset($_POST['cadastrar']))
        {
            header("location:singup.php");
            return true;
        }
        return false;
    }
    function Check_LogIn()
    {
        if(isset($_POST['entrar']))
        {
            header("location:login.php");
            return true;
        }
        return false;
    }
?>