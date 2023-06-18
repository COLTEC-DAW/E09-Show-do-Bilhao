<?php
    require "./src/Models/User.inc";
    $loginPath = './src/Storage/Users.json';

    function existUser($login){
        global $loginPath;

        $loginPointer = fopen($loginPath, 'r');
        $logins = fread($loginPointer, filesize($loginPath));
        $logins = json_decode($logins);
        foreach($logins as $user){
            if(strcmp($user->login, $login) == 0){
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

    function loginUser(){
        global $loginPath;

        $loginPointer = fopen($loginPath, 'r');
        if(filesize($loginPath) > 0){
            $logins = fread($loginPointer, filesize($loginPath));
            $logins = json_decode($logins);

            foreach ($logins as $user) {
                if($user->login == $_POST['login']){
                    if(strcmp($user->password, $_POST['password']) == 0){
                        $_SESSION['user'] = serialize($user);
                        header("Refresh:0; url=index.php");
                    }else{
                        $_POST['warning'] = "Wrong password";
                    }
                    return;
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

    function validateLogin(){
        global $loginPath;
        
        if(!isset($_SESSION['user']) && isset($_POST['username'])){
            if(strcmp($_POST['password'], $_POST['password-confirm']) != 0){
                $_POST['warning'] = "Passwords aren't equal";
                $_POST['register'] = 'register';
            }else{
                if(!existUser($_POST['login'])){
                    createUser();
                }else{
                    $_POST['warning'] = 'This login already exists';
                    $_POST['register'] = 'register';
                }
            }
        }
        elseif(!isset($_SESSION['user']) && isset($_POST['login'])){
            loginUser();
        }
    }

    function loadRightForm(){
        if(isset($_POST['register'])){
            include './templates/registerForm.inc';
            unset($_POST['register']);
        }else{
            include './templates/loginForm.inc';
        }
    }

?>