<?php
    require "./src/Models/User.inc";

    function validateLogin(){
        if(!isset($_SESSION['user']) && isset($_POST['username'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $user = new User($username, $email, $password);
            $_SESSION['user'] = serialize($user);
        }
    }

    function loadRegisterForm(){
        echo "<div>";
        echo "  <form method='post'>";
        echo "        <label for='username'>Username</label>";
        echo "        <input type='text' name='username' required/><br/>";
        echo "        <label for='email'>Email</label>";
        echo "        <input type='email' name='email' required/><br/>";
        echo "        <label for='password'>Password</label>";
        echo "        <input type='text' name='password' required/><br/>";
        echo "        <label for='password-confirm'>Password Confirm</label>";
        echo "        <input type='text' name='password-confirm' required/><br/>";
        echo "        <input type='submit' value='Register' required/>";
        echo "  </form>";
        echo "</div>";
    }

    function loadBackToHomeScreen(){
        $user = unserialize($_SESSION['user']);
        echo "<h1>Now your logged in, " . $user->username . "</h1>";
        echo "<a href='./index.php'>Go to game</a>";
    }

?>