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
        echo 'a';
        if(!isset($_POST['username'])) return false;
        echo 'b';
        
        $user = trim($_POST['username']);
        $pswd = trim($_POST['passwd']);
        echo 'c';
        if(Check_UserExists($user, $pswd) == true)
        {
            echo 'd';
            $loggedIn = true;
            RedirectToGame($user);
        }
    }
    function RedirectToGame($user)
    {
        if(!isset($_SESSION['username']))
        {
            if(empty($user)) return false;
            else
            {
                $_SESSION['username'] = $user;
                $_SESSION['atQuestion'] = 0;
            }
        }
        header("Refresh:0; url=game.php");
        return true;
    }

    function CheckLogout()
    {
        global $loggedIn;
        if(isset($_POST['logout']))
        {
            unset($_POST['logout']);
            $loggedIn = false;
            session_destroy();
            header("Refresh:0; url=index.php");
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
        header("Refresh:0; url=index.php");
    }

    function Check_UserExists($username, $passwd)
    {
        $users = User::LoadUsers();
        echo '1';
        foreach($users as $user)
        {
            echo '2';
            if($user->CheckName($username) and $user->CheckPasswd($passwd))
                return true;
        }
        return false;
    }

    function Check_SignUp()
    {
        if(isset($_POST['cadastrar']))
        {
            header("Refresh:0; url=singup.php");
            return true;
        }
        return false;
    }
    function Check_LogIn()
    {
        if(isset($_POST['entrar']))
        {
            header("Refresh:0; url=login.php");
            return true;
        }
        return false;
    }
?>