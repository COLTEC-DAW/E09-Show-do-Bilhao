<?php
    require "./src/Models/User.inc";
    $loginPath = './src/Storage/Users.json';

    function existUser(){
        global $loginPath;

        $login = $_POST['login'];

        $loginPointer = fopen($loginPath, 'r');
        $logins = fread($loginPointer, filesize($loginPath));
        $logins = json_decode($logins);
        foreach($logins as $user){
            if(strcmp($user->login, $login) == 0){
                $_POST['warning'] = 'This login already exists';
                $_POST['register'] = 'register';
                return true;
            }
        }

        return false;
    }

    function createUser(){
        global $loginPath;

        $login = $_POST['login'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $newUser = new User($username, $email, $password, $login);

        $loginPointer = fopen($loginPath, "r+");
        //If already exist a user, append to end of json
        if(filesize($loginPath) > 0){
            //Remove ']' in json end
            fseek($loginPointer, -1, SEEK_END);
            
            //Add ','
            fwrite($loginPointer, ',', 1);

            //Add new user and add ']' to close json
            fwrite($loginPointer, json_encode($newUser) . "]");

        }
        else{
            // Create array of users
            fwrite($loginPointer, json_encode(array($newUser)));
        }
        fclose($loginPointer);
    }

    function validateLogin(){
        global $loginPath;
        
        if(!isset($_SESSION['user']) && isset($_POST['username'])){
            if(strcmp($_POST['password'], $_POST['password-confirm']) != 0){
                $_POST['warning'] = "Passwords aren't equal";
                $_POST['register'] = 'register';
            }else{
                if(!existUser()){
                    createUser();
                }
            }
        }
        elseif(!isset($_SESSION['user']) && isset($_POST['login'])){

            $loginPointer = fopen($loginPath, 'r');
            if(filesize($loginPath) > 0){
                $logins = fread($loginPointer, filesize($loginPath));
                // TODO: terminar de testar o sistema de login
                foreach ($logins as $user) {
                    if($user->login == $_POST['login']){
                        echo "Tem esse login";
                        $_SESSION['user'] = $user;
                    }
                }
                if(!isset($_SESSION['user'])){
                    $_POST['warning'] = "User not found";
                }
            }else{
                $_POST['warning'] = "No users registered yeat";
            }

            fclose($loginPointer);
        }

        // if(!isset($_SESSION['user']) && isset($_POST['username'])){
        //     $username = $_POST['username'];
        //     $email = $_POST['email'];
        //     $password = $_POST['password'];
            
        //     $user = new User($username, $email, $password);
        //     $_SESSION['user'] = serialize($user);
        // }
    }

    function loadRightForm(){
        if(isset($_POST['register'])){
            loadRegisterForm();
            unset($_POST['register']);
        }else{
            loadLoginForm();
        }
    }

    function loadLoginForm(){
        echo "<form method='post'>";
        echo "    <input type='text' name='login' placeholder='login...' required /> <br/>";
        echo "    <input type='text' name='passowrd' placeholder='Password...' required /> <br/>";
        echo "    <input type='submit' value='Login' />";
        echo "</form>";
        echo "<form method='post' action='login.php'>";
        echo "    <input type='submit' name='register' value='Register' />";
        echo "</form>";
    }

    function loadRegisterForm(){
        echo "<div>";
        echo "  <form method='post'>";
        echo "        <label for='login'>Login</label>";
        echo "        <input type='text' name='login' required/><br/>";
        echo "        <label for='username'>Username</label>";
        echo "        <input type='text' name='username' required/><br/>";
        echo "        <label for='email'>Email</label>";
        echo "        <input type='email' name='email' required/><br/>";
        echo "        <label for='password'>Password</label>";
        echo "        <input type='password' name='password' required/><br/>";
        echo "        <label for='password-confirm'>Password Confirm</label>";
        echo "        <input type='password' name='password-confirm' required/><br/>";
        echo "        <input type='submit' value='Register' required/>";
        echo "  </form>";
        echo "<form method='post' action='login.php'>";
        echo "    <input type='submit' value='Go to Login' />";
        echo "</form>";
        echo "</div>";
    }

    function loadBackToHomeScreen(){
        $user = unserialize($_SESSION['user']);
        echo "<h1>Now your logged in, " . $user->username . "</h1>";
        echo "<a href='./index.php'>Go to game</a>";
    }

?>