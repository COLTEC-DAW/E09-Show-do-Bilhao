<?php
    function writtenLogin(){
        if(isset($_POST['login'])){
            return $_POST['login'];
        }
    }

    function writtenEmail(){
        if(isset($_POST['email'])){
            return $_POST['email'];
        }
    }

    function writtenUsername(){
        if(isset($_POST['username'])){
            return $_POST['username'];
        }
    }
?>

<div>
    <form method='post'>
        <label for='login'>Login</label>
        <input type='text' name='login' placeholder='Login' value="<?= writtenLogin() ?>" required/><br/>
        <label for='username'>Username</label>
        <input type='text' name='username' placeholder='Username' value="<?= writtenUsername() ?>" required/><br/>
        <label for='email'>Email</label>
        <input type='email' name='email' placeholder='Email' value="<?= writtenEmail() ?>" required/><br/>
        <label for='password'>Password</label>
        <input type='password' name='password' placeholder='Password' required/><br/>
        <label for='password-confirm'>Confirm Password</label>
        <input type='password' name='password-confirm' placeholder='Confirm Password' required/><br/>
        <input type='submit' value='Register' placeholder='' required/>
    </form>
    <form method='post' action='login.php'>
        <input type='submit' value='Go to Login' />
    </form>
</div>