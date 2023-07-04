<?php
    
    function UnpackCookie()
    {
        if(isset($_COOKIE["info"])){
            $valueCookie = explode(",", $_COOKIE["info"]);
            return $valueCookie;
        }
    }

    if (isset($_POST['logout'])) {
        if (isset($_SESSION['user'])) {
            if(isset($_COOKIE["info"]) ){
                $cookie = UnpackCookie();
                SaveCookie($cookie[0],date('Y-M-d H:i'));
            }
            else{
                SaveCookie(0,date('Y-M-d H:i'));
            }
            unset($_SESSION['user']);
            ob_start();
            header("location: login.php");
        }
    }
    function SaveCookie($score, $date)
    {
        
        setcookie( $_SESSION['user']->userName , $score . "," .  date('Y-M-d H:i') , time() + (86400 * 30));
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