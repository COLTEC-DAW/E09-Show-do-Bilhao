<?php
    
    function UnpackCookie()
    {
        $user = unserialize($_SESSION['user']);
        if(isset($_COOKIE[$user->userName])){
            $valueCookie = explode(",", $_COOKIE[$user->userName]);
            return $valueCookie;
        }
    }

    if (isset($_POST['logout'])) {
        if (isset($_SESSION['user'])) {
            $user = unserialize($_SESSION['user']);
            if(isset($_COOKIE[$user->userName]) ){
                $cookie = UnpackCookie();
                SaveCookie($cookie[0]);
            }
            else{
            }
            unset($_SESSION['user']);
            ob_start();
            header("location: login.php");
        }
    }
    function SaveCookie($score)
    {
        $user = unserialize($_SESSION['user']);
        
        setcookie($user->userName , $score . "," .  date('Y-M-d H:i') , time() + (86400 * 30));
    }
    
?>

<header>
    <form method="post">
        <?php
        if (isset($_SESSION['user']))
            echo "<input type = 'submit' value = 'Logout' name = 'logout'/>";
        ?>
    </form>

</header>